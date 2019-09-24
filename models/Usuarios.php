<?php
class Usuarios extends Model {

	public function getTotalUsuarios() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM usuarios");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function cadastrar($nome, $email, $senha, $telefone) {
		$sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() == 0) {

			$sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, telefone = :telefone");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", md5($senha));
			$sql->bindValue(":telefone", $telefone);
			$sql->execute();

			return true;

		} else {
			return false;
		}

	}

	public function validate_login($email, $senha) {
		$sql = $this->db->prepare("SELECT id FROM users WHERE email = :email AND password_hash = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			$token = md5(random_bytes(16).time().$dado['id']);

			$sql = $this->db->prepare("UPDATE users SET token = :token WHERE id = :id");
			$sql->bindValue(":token", $token);
			$sql->bindValue(":id", $dado['id']);
			$sql->execute();
			
			$_SESSION['token'] = $token;
			return true;
		} 
		return false;
	}














}
?>