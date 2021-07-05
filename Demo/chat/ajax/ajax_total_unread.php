<?php 
	
	include('../includes/loader_ajax.php');
	
	if(isset($_POST['token']))
	{
		$token->posted_token = $_POST['token'];
		$token->session_token = $_SESSION['page_token'];
		
		if($token->verify_token() == true)
		{
			if(isset($_POST['total_unread']) && $_POST['total_unread'] == 'true')
			{
				$t_r = $msg->total_unread_messages();
				if($t_r !== false)
				{ 
					echo $t_r; 
				} else {
					echo '';	
				}
			}
		}
	}

?>