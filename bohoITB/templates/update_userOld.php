<?php
//we will be using sessions 
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

require_once __DIR__ . '/../src/functions.php';
require_once __DIR__ . '/../src/main_controller.php';


//create a new instance of the user (remember the functions below are in that class file)
$user = new USER();

if(isset($_POST['register']))
{
	$uname = strip_tags($_POST['username']); //all tags stripped from the string
	$umail = strip_tags($_POST['email']);
	$upassword = strip_tags($_POST['password']);
	$uaddress= strip_tags($_POST['address']);
	$ucontact=strip_tags($_POST['contact']);
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
	else if($upassword=="")	{
		$error = "provide password !";
	}
	else if(strlen($upassword) < 6){
		$error = "Password must be atleast 6 characters";	
	}
	else if(strlen($uaddress) < 6){
		$error = "Address must be at least 6 characters";	
	}
	else if(strlen($ucontact) < 6){
		$error = "Contact must be at least 6 characters";	
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
		//		if($user->register($uname,$umail,$upassword))
				if($user->register_newuser($uname,$umail,$upassword, $uaddress, $ucontact))
		
				{	
					$user->redirect("index.php?action=login");
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

<?php
		
require_once __DIR__ . '/_header.php';

	
$pageTitle = 'register';

?>
<form method ="post" id="login-form"  class="text-center border border-dark p-5" >
<p class="h4 mb-4">Register Here Now!</p>

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
			<!-- Name -->
            <input type="text"  class="form-control mb-4" name="username" placeholder="Enter Username" required value="<?php if(isset($error)){echo $uname;}?>" />
			<br>
			<!-- Email-->
		
			<input type="text" name="email" placeholder="Enter E-Mail ID"   class="form-control mb-4" required value="<?php if(isset($error)){echo $umail;}?>" /> 
			<br>           	
			
			<!-- Password-->
			<input type="password" name="password"  class="form-control mb-4" placeholder="Enter Password">
		    <br>
			
			<!-- Address-->
			<input type="text" name="address"  class="form-control mb-4" placeholder="Enter Address">
		    <br>
			
			<!-- Contact-->
			<input type="text" name="contact"  class="form-control mb-4" placeholder="Enter Contact Number">
		    <br>
			
			<!-- Submit -->
            <input type="submit" class="btn btn-info btn-block"  name="register" value = "register">
						<br>


      </form>    
</body>
</html>