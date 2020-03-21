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
 
    $email_to = "infotech@vnbc.edu.ph";
 
    $email_subject = "enrollment";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(
		!isset($_POST['level']) ||
		
		!isset($_POST['first_name']) ||
		
		!isset($_POST['middle_name']) ||
 
        !isset($_POST['last_name']) ||
		
		!isset($_POST['month']) ||
		
		!isset($_POST['day']) ||
		
		!isset($_POST['year']) ||
		
		!isset($_POST['age']) ||
		
		!isset($_POST['place_of_birth']) ||
		
		!isset($_POST['nationality']) ||
		
		!isset($_POST['mother_tongue']) ||
		
		!isset($_POST['other_tongue']) ||
		
		!isset($_POST['ethnic_group']) ||
		
		!isset($_POST['present_address']) ||
		
		!isset($_POST['fathers_name']) ||
		
		!isset($_POST['occupation_father']) ||
		
		!isset($_POST['mothers_name']) ||
		
		!isset($_POST['occupation_mother']) ||
		
		!isset($_POST['maiden']) ||
		
		!isset($_POST['pre_school']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']))  
 
        {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 	$level = $_POST['level'];
	
    $first_name = $_POST['first_name']; // required
	
	$middle_name = $_POST['middle_name']; // required
 
   $last_name = $_POST['last_name']; // required
	
	$date_of_birth = $_POST['month'] . " " . $day = $_POST['day'] . ", " . $year = $_POST['year']; 
	
	$place_of_birth = $_POST['place_of_birth']; // required
	
	$nationality = $_POST['nationality']; // required
	
	$mother_tongue= $_POST['mother_tongue']; // required
	
	$other_tongue = $_POST['other_tongue']; // required
	
	$ethnic_group = $_POST['ethnic_group']; // required
	
	$other_ethnic = $_POST['other_ethnic']; // required
	
	$present_address = $_POST['present_address']; // required
	
	$fathers_name = $_POST['fathers_name']; // required
	
	$occupation_father = $_POST['occupation_father']; // required
	
	$mothers_name = $_POST['mothers_name']; // required
	
	$occupational_mother = $_POST['occupation_mother']; // required
	
	$maiden = $_POST['maiden']; // required
	
	$email_from = $_POST['email']; // required
	
	$parent_status = $_POST['parent_status']; // required
	
	$child_status = $_POST['child_status']; // required
	
	$prev_school = $_POST['prev_school']; // required
	
 
	$telephone = $_POST['telephone']; // not required 
 

//error message

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	
	
 //email
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
	
	//first_name: required
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  //if(strlen($comments) < 2) {
 
    //$error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  //}
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     // email display
	 
 	$email_message .= "Level: ".clean_string($level)."\n";
	$email_message .= "Last Name: ".clean_string($last_name)."\n";
	$email_message .= "First Name: ".clean_string($first_name)."\n";
	$email_message .= "Middle Name: ".clean_string($middle_name)."\n";
 
	$email_message .= "Date of Birth: ".clean_string($date_of_birth)."\n";
	$email_message .= "Place of Birth: ".clean_string($place_of_birth)."\n";
	
	$email_message .= "Natioanality: ".clean_string($nationality)."\n";
	$email_message .= "Ethnic Group: ".clean_string($ethnic_group)."\n";
	$email_message .= "Other: ".clean_string($other_ethnic)."\n";
	$email_message .= "Mother Tongue: ".clean_string($mother_tongue)."\n";
	$email_message .= "Other: ".clean_string($other_tongue)."\n";
	$email_message .= "Present Address: ".clean_string($present_address)."\n";
	
	$email_message .= "Father's Name: ".clean_string($fathers_name)."\n";
	$email_message .= "Occupation: ".clean_string($occupation_father)."\n";
	
	$email_message .= "Mother's Name: ".clean_string($mothers_name)."\n";
	$email_message .= "Occupation: ".clean_string($occupation_mother)."\n";
	$email_message .= "Mother (Maiden): ".clean_string($maiden)."\n";
	
	$email_message .= "Parent's Status:" .clean_string($parents_status)."\n";
	$email_message .= "Child Living Status:" .clean_string($child_status)."\n";
	
	$email_message .= "Name of the previous school attende:"  .clean_string($prev_school)."\n";
	
 	$email_message .= "Email:" .clean_string($email_from)."\n";
 
  	$email_message .= "Contact No.:" .clean_string($telephone)."\n";
 
  
 
     
 
     
 
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
  <p>We have received your enrollment form and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed below, to talk to one of our staff members. Otherwise, we will reply by email shortly.  The final enrollment shuold be done at vnbc campus.
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