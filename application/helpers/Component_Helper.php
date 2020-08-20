<?php 
	function cardIdentity($data)
	{
	 	$ci=& get_instance();
		return $ci->load->view('Component/Card_Identity', $data);
	}
	function cardDataDiri(){
		$ci=& get_instance();
		return $ci->load->view('Component/CardFormDataDiri');
	}
?>