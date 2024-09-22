<?php

Class SignIn extends Controller{
	function index(){
		$data['page_title'] = "Sign In";
		if(isset($_POST['email'])){
			$user=$this->loadModel("user");
			$user->signup($_POST);
		}elseif(isset($_POST['username']) && !isset($_POST['email'])){
			$user=$this->loadModel("user");
			$user->login($_POST);
		}
		$this->view("a/sign-in", $data);
	}
}