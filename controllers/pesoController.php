<?php
class pesoController extends controller
{

	public function index()
	{
		$peso = new Peso();

		$total_pesos = $peso->pesos_count(); 
		$total_paginas = ceil($total_pesos['rows'] / 10);
		
		$this->dados = array_merge($this->dados,
			['pesos' => $peso->index()],
			['total_paginas' => $total_paginas] 
		);

		$this->loadTemplate('peso', $this->dados);
	}

	public function store()
	{
		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$peso = new Peso();

			$id = isset($_POST['update']) && !empty($_POST['update']) ? addslashes($_POST['update']) : null;

			$dados = array(
				'nome' => addslashes($_POST['nome']),
				'tipo_peso' => addslashes($_POST['tipo_peso']),
				'valor' => addslashes($_POST['valor'])
			);
			unset($_POST);
			
			if($id === null){
				$peso->store($dados);
			}else{
				$peso->update($id,$dados);
			}

			$this->index();
		}
	}

	public function info($id){
		$peso = new Peso();
		$peso = $peso->findOne(addslashes($id));
		echo $peso;
	}
	
}