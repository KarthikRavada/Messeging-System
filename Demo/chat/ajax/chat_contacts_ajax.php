<?php
	include('../includes/loader_ajax.php');
	
	if(isset($_POST['token']))
	{
		$token->posted_token = $_POST['token'];
		$token->session_token = $_SESSION['page_token'];
		
		if($token->verify_token() == true)
		{
			if(isset($_POST['post_tabs']) && $_POST['post_tabs'] == 'contacts')
			{
				$init_load = true;
				$load_more = true;
				
				$msg->active_tab = 'contacts';
								
				include('../html_chat_list.php');
			}
			
			if(isset($_POST['post_tabs']) && $_POST['post_tabs'] == 'chats')
			{
				$init_load = true;
				$load_more = true;
				$chat_tab = true;
				
				$msg->active_tab = 'chats';
						
				include('../html_chat_list.php');
			}
		}
	}
?>
