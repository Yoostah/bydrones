<?php
class orcamentoController extends controller
{

	public function index()
	{
		$dados = array();		

		$this->loadTemplate('orcamento', $dados);
	}
}