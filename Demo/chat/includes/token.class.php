<?php
	
	/*
	* SecToken
	* Author: Pauloreg
	* Version: 1.0
	* www.pauloreg.com
	*/
	
	class SecToken
	{
		
		public $session_token = '';
		public $posted_token = '';
		
		public $salt_before = 'T8t082IO';
		public $salt_after = 'DES93dOls';
		
		public function token_generator()
		{
			return sha1($this->salt_before.rand(5, 10).$this->salt_after);	
		}
		
		public function verify_token()
		{
			if($this->session_token == $this->posted_token)
			{
				return true;
			} else {
				return false;	
			}
		}
		
	}
	
?>