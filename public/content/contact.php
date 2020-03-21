<style>
.bigicon{font-size:30px;color:#09F;}
</style>

	<script language="javascript">
        var x = document.getElementById("contact");  
        x.style.background = "#999";
        x.style.borderBottom="solid 3px #e25d29";
        x.style.color="white";
    </script>

<script type="text/javascript"> 
	function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(10.340148,123.907283),mapTypeId: google.	
                    maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new 	
                    google.maps.Marker({map: map,position: new google.maps.LatLng(10.340148,123.907283)});infowindow = new google.maps.
                    InfoWindow({content:"<b>Visayan Nazarene Bible College</b>" });google.maps.event.addListener(marker, "click", 
                    function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', 
                    init_map);
</script>



<div class="container" style="background:white;margin-top:0;">


	<div class="row" style="background:white; ">
		<ul class="breadcrumb" style="border-radius:0;" >
				        <li><a href="index.php">Home</a></li>
				        <li><a href="index.php?page=about">About Us</a></li>
				        <li><a href="index.php?page=admission">Admission</a></li>
                        <li><a href="index.php?page=academic">Academic</a></li>
                        <li><a href="index.php?page=contact">contact</a></li>
	</div> <!-- row1 -->

	<div class="row">
		<div class="col-sm-8">
			<div  id="map_container">
        		<div id="gmap_canvas"></div> 
                    <div style="text-align:right;width:600px;font-family:arial;font-size:10px;color:#555">© 
                        <a style="text-decoration:none;color:#555;cursor:default;" href="http://www.themecircle.net" id="get-map-data"
                        class="google-map-code">visayan nazarene bible college</a>
                    </div>
					<!--mapjshere--->
                    
            </div><!--map_container-->

            <h1 style="border-bottom:1px solid black;"> Contact Us </h1> 
            <p>Thank you for your interest in our school we hope that you will become a part of our school soon.  Please feel free to fill up the form bellow and send us a message.  We'll try to respond as soon as posible. Thank you very much. </p>
            <!--contact form-->

             <div class="well well-sm">
                <form class="form-horizontal" method="post" action="public/content/email_validation.php">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="first_name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="last_name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="telephone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="comments" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>

	        <!--/contact form-->

		</div><!--col-sm-8-->

		<div class="col-sm-4" >
			<!--<h4 style=" border-bottom:1px solid;">Other Links</h4>
					 <ul>
					 	<li><a href="#">Upcomming Events</a></li>
					 	<li><a href="#">Curriculumn</a></li>
					 	<li><a href="#">Admission</a></li>
					 	<li><a href="#">FAQ</a></li>
					 </ul>-->
				
			<div class="thumbnail" >
		      <h4 style="background:#999;padding:5px;margin:0;">Contact Info</h4>
		      	<div class="caption" style="padding-top:0;">
			        <p>Thankyou for visiting our page.  Please don't hesitate to contact us should you want to inquire anything about our school</p>
			        <h4 style="margin-bottom:0;">VNBC Office</h4>
			        <p> Tel. +6332-231-2812</p>
			        <p><a href="index.php?page=contact" class="btn btn-primary" role="button" name="email">Email</a></p>
		      </div>
		    </div>


		</div> <!-- /col-4 -->
	</div><!--row-->
</div><!--container-->
<!--/main_container-->

<!--########-->
