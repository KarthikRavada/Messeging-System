<?php

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Please Note: This is a sample demo login system, you can use it or 
	// use your own
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	/*HINT******************************************************************************************************************
	************************************************************************************************************************
	* $_SESSION['m_simulate_login'] is a sample session file used to grab the id of the logged in user,
	* the proper function to register the loggedin user id is: $msg->logged_user_id that will be
	* available on the entire application.
	*
	* You might use this file as base for your login system. On your own login system just register the logged in user with
	* $msg->logged_user_id
	*
	* You might want to preserve $token as its for security or integrate your own token system
	******************************************************************************************************************HINT*/
	
	if(isset($_POST['token']))
	{ 
		$token->posted_token = isset($_POST['token']) ? $_POST['token'] : '';
		$token->session_token = $_SESSION['page_token'];
		
		// Controls if isset the id of the user, else go back and set
		if($token->verify_token() == true)
		{ 
			if(!isset($_SESSION['m_simulate_login']) && basename($_SERVER['PHP_SELF']) !== 'index.php')
			{  
				header('Location: index.php');
				exit();
			} elseif(isset($_POST['submit']) && basename($_SERVER['PHP_SELF']) == 'index.php') {
				$login = login($_POST['username'], $_POST['password']); //@find it on functions.php 
				if($login)
				 { 
					 $_SESSION['m_simulate_login'] = $login;
					$msg->logged_user_id = $_SESSION['m_simulate_login']; // This is important so it can record login data on this page
					$msg->set_user_sessionStatus('online');
					header('Location: messages.php');
					exit();
				} else { 
					$_SESSION['login_messages'] = 'Invalid Credentials.';
					header('Location: index.php');
					exit();
				}
			}
			
			if(isset($_GET['logout']) && $_GET['logout'] == true)
			{ 
				$msg->logged_user_id = @$_SESSION['m_simulate_login']; // This is important so it can record logout data
				$msg->set_user_sessionStatus('offline');
				$_SESSION = array();
				if(isset($_COOKIE[session_name()]))
				{
					setcookie(session_name(), '', time() - 3600);	
				}
				session_destroy();
			}
		} else { 
			header('Location: index.php');
			exit();
		}
	
	} else {
		// Every page self authentication
		if(!isset($_SESSION['m_simulate_login']) && basename($_SERVER['PHP_SELF']) !== 'index.php')
		{  
			header('Location: index.php');
			exit();
		}
	}
	
?>