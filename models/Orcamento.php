<?php
class Orcamento extends model {

	public function index() {
		$array = array();
		$sql = $this->db->query("
		SELECT b.id, own.name as owner, cst.name as customer, DATE_FORMAT(b.creation_date, '%d/%m/%Y %H:%i') as createdAt, b.limit_date, 
		st.name as status, b.status as status_id,
		(SELECT sum(weight_total_value) FROM v_final_budget WHERE budget_id = b.id) as valor_total  
		FROM budget b 
		JOIN users own ON b.owner_id = own.id
		JOIN users cst ON b.customer_id = cst.id
		JOIN status st ON b.status = st.id
		ORDER BY createdAt");
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}

	public function store($owner_id, $customer_id) {
		$sql = $this->db->prepare("INSERT INTO budget 
			SET owner_id = :owner_id, 
			customer_id = :customer_id, 
			creation_date = :creation_date, 
			limit_date = :limit_date,
			status = :status");
		$sql->bindValue(":owner_id", $owner_id);
		$sql->bindValue(":customer_id", $customer_id);
		$sql->bindValue(":creation_date", sysdate());
		$sql->bindValue(":limit_date", sysdate()+1);
		$sql->execute();

		return true;

	}

	public function showItems($budget_id){
		$sql = $this->db->prepare("SELECT * FROM v_final_budget
			WHERE budget_id = :bdg_id 
			ORDER BY budget_weight");
		$sql->bindValue(":bdg_id", $budget_id);
		$sql->execute();
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
			return $array;
		}
	}

}
?>