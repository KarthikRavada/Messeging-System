<?php
	session_start();
	
	//error_reporting(0);
	
	include('connection.php');

	include('database.class.php');
	$db = new ConnectMe(DB_HOST, DB_USERNAME, DB_PASSWORD, DATABASE);
	
	include('messages.class.php');
	$msg = new Messages();
	
	include('token.class.php');
	$token = new SecToken();
	
	include('functions.php');
	
	include('demo.login.php');
	
	$msg->logged_user_id = @$_SESSION['m_simulate_login'];


?>