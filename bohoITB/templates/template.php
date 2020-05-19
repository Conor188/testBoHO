<?php
//we will be using sessions 
session_start();


require_once __DIR__ . '/../src/functions.php';
require_once __DIR__ . '/_header.php';


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

 <div class="col-lg-9" >
		
        
        <div class="row">


 
  <div class="card mb-3" style="max-width: 800px;">
  <div class="row no-gutters">
 
    <div class="col-md-12">
     Lorem Ipsum is the single greatest threat. We are not - we are not keeping up with other websites. Lorem Ipsum best not make any more threats to your website. It will be met with fire and fury like the world has never seen. Does everybody know that pig named Lorem Ipsum? An ‘extremely credible source’ has called my office and told me that Barack Obama’s placeholder text is a fraud.<img src="<?=$product['image'] ?>" class="details">
<p>Lorem Ipsum is the single greatest threat. We are not - we are not keeping up with other websites. Lorem Ipsum best not make any more threats to your website. It will be met with fire and fury like the world has never seen. Does everybody know that pig named Lorem Ipsum? An ‘extremely credible source’ has called my office and told me that Barack Obama’s placeholder text is a fraud.</p>	 
    </div>
    
 </div>
 </div>
 


</body>
</html>