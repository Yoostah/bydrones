<?php
class Peso extends Model {

	public function index() {
		$array = array();
		$sql = $this->db->query("
		SELECT wgt.id, wgt.name, wgt.value, wgt.type as type_id, type.name as type FROM budget_weights wgt  
		JOIN weight_type type ON wgt.type = type.id
		ORDER BY type, name");
		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}
		return $array;
	}	

}
?>