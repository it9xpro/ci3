<?php 
/**
* 
*/
class Welcome extends MY_Controller 
{
	
	function __construct()
	{
		# code..
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function about_us()
	{
		$this->load->view('about_us');
	}
	public function pages()
	{
		echo "1";
	}

}
?>