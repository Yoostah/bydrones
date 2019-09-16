<?php
class controller {

	protected $auth;
	protected $dados;	

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

	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		require 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

}