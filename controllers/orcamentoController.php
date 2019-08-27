<?php
class orcamentoController extends controller
{

	public function index()
	{
		$orcamento = new Orcamento();
		
		$dados = array(
			'orcamentos' => $orcamento->index() 
		);

		$this->loadTemplate('orcamento', $dados);
	}

	public function checkProgress($status){
		$status_config = array();
		switch ($status) {
			# Orçamento Pendente
			case '3':
				$status_config = array('classe'=> 'bg-warning', 'percent'=> 0);
				break;
			
			# Orçamento Aprovado
			case '4':
				$status_config = array('classe'=> 'bg-success', 'percent'=> 100);
				break;
			
			# Orçamento Reprovado
			case '5':
				$status_config = array('classe'=> 'bg-danger', 'percent'=> 66);
				break;
			
			# Orçamento Cancelado
			case '6':
				$status_config = array('classe'=> 'bg-danger', 'percent'=> 100);
				break;
			
			# Orçamento Aguardando Aprovação
			case '7':
				$status_config = array('classe'=> 'bg-info', 'percent'=> 33);
				break;
			
			default:
				# code...
				break;
		}
		return $status_config;
	}
}