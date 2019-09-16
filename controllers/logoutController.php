<?php 
class logoutController extends controller
{
	function __construct(){
	
	}
	
	public function index()	{
		session_destroy();
		$this->loadView('login');
		exit;
	}	
	
}
?>