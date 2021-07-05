
<?php
	include('includes/loader.php');
	include('tpl/head.php');
	include('tpl/header.php');
	
	$_SESSION['page_token'] = $token->token_generator();
?>


<html>
    <head>
        <meta charset="UFT-8"/>
        <meta name="viewport" content="width=device-width ,initial-scale=1.0"/>
        <meta http-equiv="X-UAV Compatible" content="ie=edge"/>
        <link 
        rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.8.1/css/all/css"
        integrity="sha384-50oBUHEmvpQ+1lw4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/style.css">
        <title>Signin or Signup Form</title>
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method ="post" action="sql.php">
                    <h1>Create Account</h1>
                    <input type="text" placeholder="Username" pattern="[a-zA-Z0-9]+" name="Username"title ="Alphanumeric only" required/>
                    <input type="text" placeholder="Name" name="Name"/>
                    <input type="text" name="Phone_Number"placeholder="Phone Number" />
                    <input type="email" name ="Email" placeholder="Email" />
                    <input type="password"  name="Password"placeholder="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
                    <input type="password" placeholder="Confirm Password"  name="Check"/>
                    <button>Sign Up</button>
                </form>
			</div>
			<?php
					if(@$_SESSION['login_messages']) 
					{
						echo '<div class="alert alert-info">'.$_SESSION['login_messages'].'</div>';
					}
				?>
            <div class="form-container sign-in-container">
                <form method="post" action="index.php">
                    <h1>Sign in</h1>
                    <input type="Username" placeholder="Username" name="Username" value="<?php echo @$_POST['username']; ?>"/>
					<input type="password" placeholder="Password" name="Password"/>
					<input type="hidden" name="token" value="<?php echo $_SESSION['page_token']; ?>" />
					<input type="submit" name="submit"  value="Sign In" />
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Hello there!</h1>
                        <p>Signin and get started!</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>New here,</h1>
                        <p>Create your account now!</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="sliding.js"></script>
    </body>
</html>
<?php
	include('tpl/footer.php');
?>