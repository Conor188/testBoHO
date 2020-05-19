<?php
//we will be using sessions 
session_start();
require_once __DIR__ . ('/../model/dbconfig.php');

require_once __DIR__ . ('/../model/mainController.php');

//create a new instance of the user (remember the functions below are in that class file)
$user = new USER();

if(isset($_POST['register']))
{
	$uname = strip_tags($_POST['username']); //all tags stripped from the string
	$umail = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);

	
	
	
	
	
	//some extra validation on top of any HTML% validation below in the form (e.g required. pattern etc) 
	
	if($uname=="")	{
		$error = "provide username !";	
	}
	else if($umail=="")	{
		$error = "provide email id !";	
	}
	//filter_var validates the email 
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error = 'Please enter a valid email address !';
	}
	else if($upass=="")	{
		$error = "provide password !";
	}
	else if(strlen($upass) < 6){
		$error = "Password must be atleast 6 characters";	
	}
	else
	{
		try
		{
			//we will look at all the usernames and emails in the DB to see if they are already taken
			$stmt = $user->runQuery("SELECT username, email FROM users WHERE username=:uname OR email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
			//compare with the data in the database	
			if($row['username']==$uname) {
				$error = "sorry username already taken !";
			}
			else if($row['email']==$umail) {
				$error = "sorry email id already taken !";
			}
			else
			{
				if($user->register($uname,$upass,$umail))
				{	
					$user->redirect('login.php');
				}
			}
		}
		
		
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
}

?>
<!--------------------------------------the else part of the program that is HTML---------->

<!DOCTYPE>
<html>
<head>
<title>Register page</title>
<style> @import "style2.css"; </style>
<?php require_once __DIR__ . '/../templates/_header.php';
?>
</head>
<body>

<div class="signup-form">
<form method="post" id="login-form" align ="center">
<h2>Registration Page</h2>
<!-------Format the error in css------->    
        <div id="error">
       <?php
			if(isset($error))
			{
				?>
                <div class="alert alert-danger">
                   <?php echo $error; ?> !
                </div>
                <?php
			}
		?>
   <div class="row"> 
	 <div class="col-lg-12" style="min-width: 600px" "border-style: solid" "border-color:black">      
    


		
        <div class="form-group">
        	<input type="text" class="form-control" name="username" placeholder="Username"  required value="<?php if(isset($error)){echo $uname;}?>" />
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email Address" required value="<?php if(isset($error)){echo $umail;}?>" /> 
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" >
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" >
        </div>  
		
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="https://www.tutorialrepublic.com/snippets/bootstrap/elegant-sign-up-form.php#">Terms of Use</a> &amp; <a href="https://www.tutorialrepublic.com/snippets/bootstrap/elegant-sign-up-form.php#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="register" value="register" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="text-center">Already have an account?  <a href="https://www.tutorialrepublic.com/snippets/bootstrap/elegant-sign-up-form.php#">Login here</a></div>

</div> 
</div>
</body>
</html>