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

	public function store()
	{
		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$orcamento = new Orcamento();

			$deslocamento = ["item" => 11, "value" => (isset($_POST['deslocamento']) && !empty($_POST['deslocamento'])) ? addslashes($_POST['deslocamento']) : null];
			$area = ["item" => addslashes($_POST['tipo_area']), "value" => addslashes($_POST['tamanho_area'])];
			$hospedagem = ["item" => 12, "value" => (isset($_POST['hospedagem']) && !empty($_POST['hospedagem'])) ? addslashes($_POST['hospedagem']) : null];
			$alimentacao = ["item" => 13, "value" => (isset($_POST['alimentacao']) && !empty($_POST['alimentacao'])) ? addslashes($_POST['alimentacao']) : null];

			$data = array(
				'nome' => addslashes($_POST['nome']),
				'email' => (isset($_POST['email']) && !empty($_POST['email'])) ? addslashes($_POST['email']) : null,

				'servicos' => [$deslocamento, $area, $hospedagem, $alimentacao]
			);
			unset($_POST);

			$insertedId = $orcamento->store($data);

			$this->index();
		}
	}

	public function enviarEmail($id)
	{
		$orcamento = new Orcamento();

		$orcamento->sendOrcamentoByEmail(addslashes($id));

		$this->index();
	}

	public function aprovarOrcamento($id)
	{
		$orcamento = new Orcamento();

		$orcamento->accept(addslashes($id));

		$this->index();
	}

	public function reprovarOrcamento($id)
	{
		$orcamento = new Orcamento();

		$orcamento->deny(addslashes($id));

		$this->index();
	}
	
	public function showItems($budget_id)
	{
		$orcamento = new Orcamento();

		return $orcamento->showItems($budget_id);
	}

	public function checkProgress($status)
	{
		$status_config = array();
		switch ($status) {
				# Orçamento Pendente
			case '3':
				$status_config = array('classe' => 'bg-warning', 'percent' => 0);
				break;

				# Orçamento Aprovado
			case '4':
				$status_config = array('classe' => 'bg-success', 'percent' => 100);
				break;

				# Orçamento Reprovado
			case '5':
				$status_config = array('classe' => 'bg-danger', 'percent' => 66);
				break;

				# Orçamento Cancelado
			case '6':
				$status_config = array('classe' => 'bg-danger', 'percent' => 100);
				break;

				# Orçamento Aguardando Aprovação
			case '7':
				$status_config = array('classe' => 'bg-info', 'percent' => 33);
				break;

			default:
				# code...
				break;
		}
		return $status_config;
	}
}