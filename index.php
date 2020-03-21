<?php 
if (@$_GET['page'] == ''){$pg = 'home';} else {$pg = $_GET['page'];};
//include('config/setup.php'); 
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="keywords" content="vnbc, visayan nazarene bible college preschool, visayan nazarene bible college college, visayan nazarene bible college elementary, visayan nazarene bible ocllege high school, bible, vnbc">
    <meta name="description=" content="vnbc, Cebu private christian school, offers bachelor of arts in theology major in pastoral ministry, Bachelor of arts in Religious Education majoy in pre-school education/management, ">
    <meta name="author" content="vnbc">
    

<title>VNBC</title>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<link rel="stylesheet" type="text/css" href="public/jQueryAssets/jquery.ui.accordion.min.css">
<link rel="stylesheet" type="text/css" href="public/jQueryAssets/jquery.ui.core.min.css">
<link rel="stylesheet" type="text/css" href="public/jQueryAssets/jquery.ui.theme.min.css">

<script src="public/jQueryAssets/jquery-ui-1.9.2.accordion.custom.min.js"></script>


    <link rel='shortcut icon' href='public/img/vnbc.ico' type='image/x-icon'/ >
   
    <link rel="stylesheet" href="public/css/bootstrap-responsive-tabs.css">
    <link href="public/css/mystyle.css" rel="stylesheet" />
    <link href="public/css/stylenav.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="public/font-awesome/css/font-awesome.css">
    


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">				
    </script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
    <link rel="stylesheet" type="text/css" href="public/accordion/jquery-ui.css">

    
  
    
    
     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '545654362298840',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>




<!--header-->
	<?php 
		//include('public/content/banner.php');
	?>
<!--/header-->

<!--navigation-->
	<?php
        include('public/template/main_nav.php');
    ?>
<!--/navigation --> 

<!--main-content-->
		<?php 
            include ('public/content/'.$pg.'.php');
            //echo $page['body'];
        ?>
       
<!--/main-content-->


<!--main footer-->
	<?php
        include('public/template/main_footer.php');
    ?>
<!--/main footer-->
    
    
    
    <!--js-->
    
    
    
 <script src="public/accordion/external/jquery/jquery.js"></script>  
 <script src="public/accordion/jquery-ui.js"></script> 
 <script>$( "#accordion" ).accordion();</script>

 
 
<script src="public/js/jquery-1.12.1.min.js"></script> 
<script src="public/js/jquery.bootstrap-responsive-tabs.min.js"></script> 
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/main.js"></script>
<script src="public/js/navshrink.js"></script>







</body>
</html>