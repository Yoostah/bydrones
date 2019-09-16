<?php
class Orcamento extends model
{

	public function index(){
		$page = (isset($_GET['page']) && !empty($_GET['page']))? addslashes($_GET['page']):'1';

		$array = array();
		
		$sql = $this->db->query("
		SELECT b.id, own.name as owner, b.customer_name as customer, b.customer_email as email, DATE_FORMAT(b.creation_date, '%d/%m/%Y %H:%i') as createdAt, b.limit_date, 
		st.name as status, b.status as status_id,
		(SELECT sum(weight_total_value) FROM v_final_budget WHERE budget_id = b.id) as valor_total  
		FROM budget b 
		JOIN users own ON b.owner_id = own.id
		JOIN status st ON b.status = st.id
		WHERE b.status IN (3,5,6,7)
		 
		ORDER BY createdAt
		LIMIT ".(($page-1)*10).", 10");

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}

	public function budgets_count(){
		$row_count = 0;
		$sql = $this->db->query("
			SELECT count(*) as rows FROM budget b
			WHERE b.status IN (3,5,6,7)");

		if ($sql->rowCount() > 0) {
			$row_count = $sql->fetch();
		}

		return $row_count;
	}

	public function update($id, $data){

		$sql = $this->db->prepare("UPDATE budget 
			SET owner_id = :owner_id, 
			customer_name = :customer_name, 
			customer_email = :customer_email, 
			status = :status
			WHERE id = :budget_id");
		$sql->bindValue(":owner_id", $data['user']);
		$sql->bindValue(":customer_name", $data['nome']);
		$sql->bindValue(":customer_email", $data['email']);
		$sql->bindValue(":status", 3); //Orçamento Pendente
		$sql->bindValue(":budget_id", $id);
		$sql->execute();

		$sql_delete = $this->db->prepare("DELETE FROM budget_services WHERE budget_id = :budget_id");
		$sql_delete->bindValue(":budget_id", $id);
		$sql_delete->execute();


		foreach ($data['servicos'] as $key => $servico) {
			if ($servico['value']) {

				$sql_consult = $this->db->query('SELECT value as valor FROM budget_weights WHERE id = ' . $servico['item']);
				if ($sql_consult->rowCount() > 0) {
					$valor_servico = $sql_consult->fetch();

					$valor_servico = ($valor_servico['valor'] * $servico['value']);

					$sql_insert = $this->db->prepare("INSERT INTO budget_services 
					SET budget_id = :budget_id, 
					budget_weight = :budget_weight, 
					weight_quantity = :weight_quantity,
					weight_total_value = :total_value");

					$sql_insert->bindValue(":budget_id", $id);
					$sql_insert->bindValue(":budget_weight", $servico['item']);
					$sql_insert->bindValue(":weight_quantity", $servico['value']);
					$sql_insert->bindValue(":total_value", $valor_servico);

					$sql_insert->execute();
				}
			}
		}
		return true;

	}

	public function store($data){

		$sql = $this->db->prepare("INSERT INTO budget 
			SET owner_id = :owner_id, 
			customer_name = :customer_name, 
			customer_email = :customer_email, 
			creation_date = :creation_date, 
			limit_date = :limit_date,
			status = :status");

		$sql->bindValue(":owner_id", $data['user']);
		$sql->bindValue(":customer_name", $data['nome']);
		$sql->bindValue(":customer_email", $data['email']);
		$sql->bindValue(":creation_date", date("Y-m-d H:i:s", time()));
		$sql->bindValue(":limit_date", date("Y-m-d H:i:s", time()));
		$sql->bindValue(":status", 3); //Orçamento Pendente
		$sql->execute();

		$lastInsert = $this->db->lastInsertId();

		if ($lastInsert) {
			foreach ($data['servicos'] as $key => $servico) {
				if ($servico['value']) {

					$sql_consult = $this->db->query('SELECT value as valor FROM budget_weights WHERE id = ' . $servico['item']);
					if ($sql_consult->rowCount() > 0) {
						$valor_servico = $sql_consult->fetch();

						$valor_servico = ($valor_servico['valor'] * $servico['value']);

						$sql_insert = $this->db->prepare("INSERT INTO budget_services 
						SET budget_id = :budget_id, 
						budget_weight = :budget_weight, 
						weight_quantity = :weight_quantity,
						weight_total_value = :total_value");

						$sql_insert->bindValue(":budget_id", $lastInsert);
						$sql_insert->bindValue(":budget_weight", $servico['item']);
						$sql_insert->bindValue(":weight_quantity", $servico['value']);
						$sql_insert->bindValue(":total_value", $valor_servico);

						$sql_insert->execute();
					}
				}
			}
			return true;
		} else {
			return false;
		}
	}

	public function findOne($id){
		$array = array();
		$sql = $this->db->prepare("
		SELECT *  
		FROM v_budget_overview		
		WHERE budget_id = :bdg_id");
		$sql->bindValue(":bdg_id", $id);
		$sql->execute();
		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return json_encode($array);

	}
	
	public function showItems($budget_id){
		$sql = $this->db->prepare("SELECT * FROM v_final_budget
			WHERE budget_id = :bdg_id 
			ORDER BY budget_weight");
		$sql->bindValue(":bdg_id", $budget_id);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
			return $array;
		}
	}

	public function budgetCustomerInfo($budget_id){
		$sql = $this->db->prepare("SELECT customer_name as name, customer_email as email FROM budget
			WHERE id = :bdg_id");
		$sql->bindValue(":bdg_id", $budget_id);
		$sql->execute();
		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
			return $array;
		}
	}

	public function accept($budget_id){
		$sql_consult = $this->db->query('SELECT * FROM budget WHERE id = ' . $budget_id . ' AND status IN (3,7)');
		if ($sql_consult->rowCount() > 0) {
			$sql_update = $this->db->query("UPDATE budget SET status = 4 WHERE id = " . $budget_id);
			$sql_update->execute();
			return true;
		} else {
			return false;
		}
	}

	public function deny($budget_id){
		$sql_consult = $this->db->query('SELECT * FROM budget WHERE id = ' . $budget_id . ' AND status IN (3,7)');
		if ($sql_consult->rowCount() > 0) {
			$sql_update = $this->db->query("UPDATE budget SET status = 5 WHERE id = " . $budget_id);
			$sql_update->execute();
			return true;
		} else {
			return false;
		}
	}

	public function sendOrcamentoByEmail($budget_id){
		$sql_consult = $this->db->query('SELECT * FROM budget WHERE id = ' . $budget_id . ' AND status = 3');
		if ($sql_consult->rowCount() > 0) {
			$sql_update = $this->db->query("UPDATE budget SET status = 7 WHERE id = " . $budget_id);
			$sql_update->execute();
			return true;
		} else {
			return false;
		}
	}
}