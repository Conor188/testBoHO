<?php
//we will be using sessions 
session_start();
require_once __DIR__ . '/../src/dbconfig.php';
require_once __DIR__ . '/../src/main_controller.php';


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
				if($user->register($uname,$umail,$upass))
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
</head>
<body>
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
            <input type="text" name="username" placeholder="Enter Username" required value="<?php if(isset($error)){echo $uname;}?>" />
			<br>
            <input type="text" name="email" placeholder="Enter E-Mail ID" required value="<?php if(isset($error)){echo $umail;}?>" /> 
			<br>           	
			<input type="password" name="password" placeholder="Enter Password">
		    <br>

            <input type="submit"  name="register" value = "register">
						<br>


      </form>    
</body>
</html>