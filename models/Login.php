<?php 
class Login extends Model {
	private $loggedId;
	private $loggedName;
	private $isAdmin;

  public function isLogged(){
		if(!empty($_SESSION['token'])){
			$token = $_SESSION['token'];
			$user = array();

			$sql = $this->db->prepare("SELECT id, name, is_admin FROM users 
			WHERE token = :token");
			$sql->bindValue(":token", $token);
			$sql->execute();
			if ($sql->rowCount() > 0) {
				$user = $sql->fetch();
				$this->loggedId = $user['id'];
				$this->loggedName = $user['name'];
				$this->isAdmin = $user['is_admin'];
				return true;
			}
		}
		return false;  
    	
	}

	public function getLoggedID(){
		return $this->loggedId;
	}
	public function getLoggedName(){
		return $this->loggedName;
	}
	public function isAdmin(){
		if($this->isAdmin === '1' ){
			return true;
		}else{
			return false;
		}
	}



}