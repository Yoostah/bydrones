<?php
class orcamentoController extends controller
{
	
	public function index()
	{

		$orcamento = new Orcamento();
		$orcamentos = $orcamento->index();
		
		$total_budgets = $orcamento->budgets_count(); 
		$total_paginas = ceil($total_budgets['rows'] / 10);
		
		$this->dados = array_merge($this->dados,
			['orcamentos' => $orcamento->index()],
			['total_paginas' => $total_paginas]
		);

		$this->loadTemplate('orcamento', $this->dados);
	}

	public function store()
	{
		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$orcamento = new Orcamento();

			$user = $this->auth->getLoggedID();
			$id = isset($_POST['update']) && !empty($_POST['update']) ? addslashes($_POST['update']) : null;
			$deslocamento = ["item" => 11, "value" => (isset($_POST['deslocamento']) && !empty($_POST['deslocamento'])) ? addslashes($_POST['deslocamento']) : null];
			$area = ["item" => addslashes($_POST['tipo_area']), "value" => addslashes($_POST['tamanho_area'])];
			$hospedagem = ["item" => 12, "value" => (isset($_POST['hospedagem']) && !empty($_POST['hospedagem'])) ? addslashes($_POST['hospedagem']) : null];
			$alimentacao = ["item" => 13, "value" => (isset($_POST['alimentacao']) && !empty($_POST['alimentacao'])) ? addslashes($_POST['alimentacao']) : null];

			$dados = array(
				'nome' => addslashes($_POST['nome']),
				'email' => (isset($_POST['email']) && !empty($_POST['email'])) ? addslashes($_POST['email']) : null,
				'user' => $user,
				'servicos' => [$deslocamento, $area, $hospedagem, $alimentacao]
			);
			unset($_POST);
			
			if($id === null){
				$orcamento->store($dados);
			}else{
				$orcamento->update($id,$dados);
			}

			$this->index();
		}
	}

	public function info($id){
		$orcamento = new Orcamento();
		$orcamento = $orcamento->findOne(addslashes($id));
		echo $orcamento;
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

	public function aprovarOrcamentoMail($id)
	{
		$orcamento = new Orcamento();	

		$retorno = $orcamento->accept(addslashes($id));
		if($retorno){
			echo '<h1>Orçamento Aprovado.</h1><h2>Aguarde nosso Contato!</h2>';
		}else{
			echo '<h1>Este Orçamento já foi encaminhado aos Consultores</h1><h2>Aguarde nosso Contato!</h2>';
		}	
	}

	public function reprovarOrcamento($id)
	{
		$orcamento = new Orcamento();

		$orcamento->deny(addslashes($id));

		$this->index();
	}

	public function reprovarOrcamentoMail($id)
	{
		$orcamento = new Orcamento();

		$retorno = $orcamento->deny(addslashes($id));
		if($retorno){
			echo '<h1>Orçamento Reprovado.</h1><h2>Aguarde nosso Contato!</h2>';
		}else{
			echo '<h1>Este Orçamento já foi encaminhado aos Consultores</h1><h2>Aguarde nosso Contato!</h2>';
		}	
	}
	
	public function showItems($budget_id)
	{
		$orcamento = new Orcamento();

		return $orcamento->showItems($budget_id);
	}

	public function geraPDF($budget_id){
		require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';
		$pdf = new \Mpdf\Mpdf();

		$orcamento = new Orcamento();
    $dados = $orcamento->showItems($budget_id);

    $email = new MailOrcamento();
    $destinatario = $orcamento->budgetCustomerInfo($budget_id);

    $linhas_de_servico = '';
    $troca_cor = 1;
    foreach ($dados as $key => $value) {
      if ($troca_cor) {
        $linhas_de_servico .= $email->montaOrcamentoLinhaBranca($value['cat_image'] . '.png', $value['name'], $value['weight_quantity'] + 0, 'R$
        ' . $value['weight_total_value']);
        $troca_cor--;
      } else {
        $linhas_de_servico .= $email->montaOrcamentoLinhaCinza($value['cat_image'] . '.png', $value['name'], $value['weight_quantity'] + 0, 'R$
        ' . $value['weight_total_value']);
        $troca_cor++;
      }
    }

    $linhas_de_servico .= $email->montaOrcamentoSomatorio('R$
    ' . $dados[0]['TOTAL']);

    include dirname(dirname(__FILE__)) . '/views/email/orcamento.php';


		$pdf->WriteHTML(orcamento($linhas_de_servico));
		$pdf->Output();
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