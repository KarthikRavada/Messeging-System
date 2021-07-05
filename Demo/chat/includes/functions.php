<?php	
	
	/*HINT******************************************************************************************************************
	************************************************************************************************************************
	* This file contains files that might be needed to this system, its up to your to include them or not depending on
	* modifications you want make.
	* profile_picture you might want to keep 
	******************************************************************************************************************HINT*/
	
	// Return a list of users (used on index.php page)
	function get_users()
	{
		global $db;
		
		$query = $db->query("SELECT * FROM users");
		
		return $db->results($query);
	}	
	
	// Return profile pic (used on messages.php)
	function profile_picture($user_id, $base_url)
	{ 
		global $msg, $base_root;

		$app_path = $_SERVER['DOCUMENT_ROOT'] . $base_root;

		$path = 'images/';
		$result = $msg->user_profile_picture($user_id, $base_url);
		if(file_exists($app_path.$path.$result))
		{
			return $base_url.$path.$result;	
		} else {
			return $base_url.$path.'default.jpg';	
		}
	}
	
	// Login function (must return user_id)
	function login($username, $password) 
	{ 
		global $db;
		
		$query = $db->query(sprintf("SELECT * FROM users WHERE username = '%s' AND password = '%s'", $db->escape($username), $db->escape(sha1($password))));
		
		if($db->num_rows($query) == 1)
		{
			$data = $db->fetch_row($query);
			if($data)
			{
				return $data['id'];
			} else {
				return false;
			}
		}
		
	}
?>