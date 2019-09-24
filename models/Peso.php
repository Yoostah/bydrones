<?php
class Peso extends Model {

	public function index() {
		$page = (isset($_GET['page']) && !empty($_GET['page']))? addslashes($_GET['page']):'1';

		$array = array();
		$sql = $this->db->query("
		SELECT wgt.id, wgt.name, wgt.value, wgt.type as type_id, type.name as type FROM budget_weights wgt  
		JOIN weight_type type ON wgt.type = type.id
		ORDER BY type, name
		LIMIT ".(($page-1)*10).", 10");
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}	

	public function pesos_count(){
		$row_count = 0;
		$sql = $this->db->query("
			SELECT count(*) as rows FROM budget_weights b");

		if ($sql->rowCount() > 0) {
			$row_count = $sql->fetch();
		}

		return $row_count;
	}

	public function findOne($id){
		$array = array();
		$sql = $this->db->prepare("
		SELECT *  
		FROM budget_weights		
		WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();
		
		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return json_encode($array);

	}

	public function store($data){

		$sql = $this->db->prepare("INSERT INTO budget_weights
			SET name = :name, 
			type = :type, 
			value = :value"); 

		$sql->bindValue(":name", $data['nome']);
		$sql->bindValue(":type", $data['tipo_peso']);
		$sql->bindValue(":value", $data['valor']);
		$sql->execute();

		return true;		
	}

	public function update($id, $data){

		$sql = $this->db->prepare("UPDATE budget_weights 
			SET name = :name, 
			type = :type, 
			value = :value
			WHERE id = :id");
		$sql->bindValue(":name", $data['nome']);
		$sql->bindValue(":type", $data['tipo_peso']);
		$sql->bindValue(":value", $data['valor']);
		$sql->bindValue(":id", $id);
		$sql->execute();
				
		return true;

	}
}
?>