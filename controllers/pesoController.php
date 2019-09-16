<?php
class pesoController extends controller
{

	public function index()
	{
		$peso = new Peso();
		
		$this->dados = array_merge($this->dados,
			['pesos' => $peso->index()] 
		);

		$this->loadTemplate('peso', $this->dados);
	}
	
}