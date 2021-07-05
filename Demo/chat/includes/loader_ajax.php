<?php
	session_start();
	
	//error_reporting(0);

	include('../includes/connection.php');

	include('../includes/database.class.php');
	
	$db = new ConnectMe(DB_HOST, DB_USERNAME, DB_PASSWORD, DATABASE);
	
	include('../includes/messages.class.php');
	
	$msg = new Messages();
	
	include('../includes/token.class.php');
	$token = new SecToken();
	
	include('../includes/functions.php');
	
	$msg->logged_user_id = $_SESSION['m_simulate_login'];
	
	include('../includes/embed.php');

	include('../includes/attachments.class.php');
	
	include('../includes/maps.class.php');
	
?>