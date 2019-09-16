<?php 
class loginController extends controller
{
	private $auth;

	public function index()
	{
		$this->auth = new Login();
		if($this->auth->isLogged()){
			header('Location:'.BASE_URL.'home' );
			exit;
		}

		$dados = array( 
			'error' => ''
		);

		if($_SESSION['errorMsg']){
			$dados['error'] = $_SESSION['errorMsg'];
			$_SESSION['errorMsg'] = '';
		}

		$this->loadView('login', $dados);
		exit;
	}
	
	public function logar(){
		if(!empty($_POST['email']) && !empty($_POST['password'])){
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['password']);

			$user = new Usuarios();
			;
			if($user->validate_login($email, $senha)){
				//session_start();
				//$_SESSION['user'] = $logado['name'];
			//	$_SESSION['id']   = $logado['id'];
			//	$_SESSION['is_admin'] = $logado['is_admin'];
				header('Location:'.BASE_URL.'home');
				exit;
			}else{
				$_SESSION['errorMsg'] = 'Login e/ou senha Inválidos!';
			}
		}else{
			$_SESSION['errorMsg'] = 'Preencha os dados de acesso!';
		}
		header('Location:'.BASE_URL.'login');
		exit;		
	}
}
?>