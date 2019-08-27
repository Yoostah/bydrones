<?php
class pesoController extends controller
{

	public function index()
	{
		$peso = new Peso();
		
		$dados = array(
			'pesos' => $peso->index() 
		);

		$this->loadTemplate('peso', $dados);
	}
	
}