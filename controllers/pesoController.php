<?php
class pesoController extends controller
{
	private $auth;
	private $dados;	

	function __construct(){
		$this->auth = new Login();

		if(!($this->auth->isLogged())){
			header('Location:'.BASE_URL.'login' );
			exit;
		};

		if(!($this->auth->isAdmin())){
			header('Location:'.BASE_URL.'notAllowed' );
			exit;
		};

		$this->dados = array(
			'user' => $this->auth
		);
	}	

	public function index()
	{
		$peso = new Peso();
		
		$this->dados = array_merge($this->dados,
			['pesos' => $peso->index()] 
		);

		$this->loadTemplate('peso', $this->dados);
	}
	
}