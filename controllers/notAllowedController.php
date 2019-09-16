<?php
class notAllowedController extends controller {
	
	public function index() {
		$this->loadTemplate('notAllowed', $this->dados);
	}

}