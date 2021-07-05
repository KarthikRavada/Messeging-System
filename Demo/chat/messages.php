<?php
	include('includes/loader.php');
	
	// Note: This is the page that matters to you

	include('tpl/head.php');
	include('tpl/header.php');
	
	if(isset($_SESSION['page_token']))
	{
		if(strlen($_SESSION['page_token']) !== 0)
		{
			$_SESSION['page_token'] = $_SESSION['page_token'];
		}
	} else {
		$_SESSION['page_token'] = $token->token_generator();
	}
	
?>

<div class="container">
  <div class="row">
    <div class="content-wrap margin-reset">
         <!-- messages -->
        <div class="messages-box">
            <?php include('messages_load.php'); ?>
        </div>
        <p style="padding-top: 5px; color: #aaa;">Hint: Type [unread] to filter unread messages</p>
        <!-- // messages -->
    </div>
  </div><!-- // row -->
</div><!-- // container -->

<input type="hidden" id="token" name="token" value="<?php echo $_SESSION['page_token']; ?>" />
    
<?php
	include('tpl/footer.php');
?>