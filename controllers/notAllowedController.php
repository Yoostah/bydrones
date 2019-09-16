<?php
class notAllowedController extends controller {

	private $auth;
	private $dados;	

	function __construct(){
		$this->auth = new Login();

		if(!($this->auth->isLogged())){
			header('Location:'.BASE_URL.'login' );
			exit;
		};

		$this->dados = array(
			'user' => $this->auth
		);
	}	
	
	public function index() {
		$this->loadTemplate('notAllowed', $this->dados);
	}

}