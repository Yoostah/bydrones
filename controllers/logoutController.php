<?php 
class logoutController extends controller
{
	
	public function index()	{
		session_destroy();
		$this->loadView('login');
		exit;
	}	
	
}
?>