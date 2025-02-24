<?php

Class User{

	function login($POST)
	{
		$DB = new Database();

		$_SESSION['error'] = "";
		if(isset($POST['username']) && isset($POST['password']))
		{

			$arr['username'] = $POST['username'];
			$arr['password'] = $POST['password'];

			$query = "select * from users where username = :username && password = :password limit 1";
			$data = $DB->read($query,$arr);
			if(is_array($data))
			{
 				//logged in
 				$_SESSION['user_name'] = $data[0]->username;
				$_SESSION['user_url'] = $data[0]->url_address;

				header("Location:". ROOT . "home");
				die;

			}else{

				$_SESSION['error'] = "wrong username or password";
			}
		}else{

			$_SESSION['error'] = "please enter a valid username and password";
		}

	}

	function signup($POST){
		$DB=new DataBase();
		$_SESSION['error']="";
		if(isset($POST['username']) && isset($POST['password'])){
			$arr['username']=$POST['username'];
			$arr['password']=$POST['password'];
			$arr['url_address']=get_random_string_max(60);
			$arr['date']=date("Y-m-d H:i:s");
			$arr['email']=$POST['email'];
			$query="INSERT INTO users(url_address,username,password,email,date) VALUES(:url_address,:username,:password,:email,:date)";
			$data=$DB->write($query,$arr);
			if($data){
				header("Location: ". ROOT ."signin");
				die;
			}
		}else{
			$_SESSION['error']="Invalid email or password!";
		}
	}

	function checklogin(){
		$DB = new DataBase();
		if(isset($_SESSION['user_url'])){
			$arr['user_url']=$_SESSION['user_url'];
			$query="select * from users where url_address=:user_url limit 1";
			$data=$DB->read($query,$arr);
			if(is_array($data)){
				$_SESSION['user_id']=$data[0]->userid;
				$_SESSION['user_name']=$data[0]->username;
				$_SESSION['user_url']=$data[0]->url_address;
				return true;
			}
		}
		return false;
	}

	function logout(){
		unset($_SESSION['user_name']);
		unset($_SESSION['user_url']);

		header("Location:". ROOT . "login");
		die;
	}
}