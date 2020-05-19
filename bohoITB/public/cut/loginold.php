<?php
//we will be using sessions 
session_start();


require_once __DIR__ . '/../src/functions.php';



//create a new instance of the user 
$login = new USER();

if(isset($_POST['submit']))
{
	$uname = strip_tags($_POST['txt_uname_email']);
	$umail = strip_tags($_POST['txt_uname_email']);
	$upass = strip_tags($_POST['txt_password']);
	
	
//call this function from the controller  file that verifies the user
	if($login->checkLogin($uname,$umail,$upass))
	{
		$login->redirect('home.php');
	}
	else
	{
		$error = "Wrong Details !";
	}	
}


?>
<!DOCTYPE>
<html>
<head>
<title>Login page</title>
<style> @import "css/style2.css"; </style>

<?php require_once __DIR__ . '/../templates/_header.php';
?>
</head>
</body>

 <div class="col-lg-9" >
        <div class="row">
  <div class="card mb-3" style="max-width: 800px;">
  <div class="row no-gutters">
    <div class="col-md-12">
	</div>

<!------ Include the above in your HEAD tag ---------->
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login Form</h3>
					
					
					
                    <form method="post" id="login-form">
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
					
					
					
		</div>			
					
					<br>
                        <div class="form-group">
                            <input type="text" name="txt_uname_email" class="form-control" placeholder="Your Email *" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="txt_password" class="form-control" placeholder="Your Password *" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btnSubmit"  />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
				<h3>Register Now! </h3>
				
				<li>Donec pharetra elit consectetur justo bibendum faucibus</li>
<li>Duis ultricies eros et erat cursus, ut fermentum eros efficitur.</li>
<li>Etiam vitae mauris nec enim auctor tincidunt.</li>
<li>Ut pharetra erat at ante blandit, a vulputate ante mollis</li>
       <label>Don't have account yet! <a href="register.php">Sign Up</a></label>

    </div>
 </div>
</div>
 


</body>
</html>