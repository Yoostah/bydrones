<?php
class homeController extends controller{

	

	public function index()
	{
		$this->loadTemplate('home', $this->dados);
	}
}