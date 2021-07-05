<?php
	include('../includes/loader_ajax.php');
	
	header('Content-Type: text/html; charset=utf-8');
	
	if(isset($_POST['token']))
	{ 
		$token->posted_token = $_POST['token'];
		$token->session_token = $_SESSION['page_token'];
		
		if($token->verify_token() == true)
		{ 
			if(isset($_POST['id']))
			{
				$user_id = $db->escape($_POST['id']);
				
				$message = $db->escape($_POST['message']);
					
				$cdata = $msg->add_message($user_id, $message);
				
				$new_msg = true;
				
				include('../html_chat.php');
			}
		}
	}

?>
