<?php 
if (@$_GET['page'] == ''){$pg = 'home';} else {$pg = $_GET['page'];};
//include('config/setup.php'); 
?>
<?php 
		include('public/content/banner.php');
	?>
<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "info@vnbc.edu.ph";
 
    $email_subject = "comments";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>

<html>
	<head>
    	<title>response</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="vnbc, visayan nazarene bible college preschool, visayan nazarene bible college college, visayan nazarene bible college 			
    elementary, visayan nazarene bible ocllege high school, bible, vnbc">
    <meta name="description=" content="vnbc, Cebu private christian school, offers bachelor of arts in theology major in pastoral ministry, Bachelor of 
    arts in Religious Education majoy in pre-school education/management, vnbc ">
    <meta name="author" content="vnbc">
    
    
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
        <link rel="stylesheet" type="text/css" href="../css/stylenav.css">
     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    
    <body>
    
  		<div class="banner">
            <img src="../img/banner3.png">
        </div>

    <div class="container">
   
	
    <div class="jumbotron" style="margin-top:50px;">
  <h1>Thank You!</h1>
  <p>We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed below, to talk to one of our staff members. Otherwise, we will reply by email shortly.
Talk to you soon,
[vnbc]</p>
  <p><a class="btn btn-primary btn-lg" href="http://vnbc.edu.ph/index.php?page=contact" role="button">Finshed</a></p>
  
  <div class="thumbnail" >
		      <h4 style="background:#999;padding:5px;margin:0;">Contact Info</h4>
		      	<div class="caption" style="padding-top:0;">
			        
			        <h4 style="margin-bottom:0;">VNBC Office</h4>
			        <p> Tel. [63](32)-231-2812</p>
			        
		      </div>
		    </div>
</div>
    	
        
     </div>
    </body>
    
</html>
 
<?php
 
}
 
?>