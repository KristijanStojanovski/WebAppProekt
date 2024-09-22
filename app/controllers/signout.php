<?php

Class SignOut extends Controller{
	function index(){
		$user=$this->loadModel("user");
		$user->logout();
	}
}