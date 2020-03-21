<?php //setup 

$connect = mysqli_connect('vnbc.com', 'john', 'shalom123', 'vnbc'); // will connect to the database 
$q ="SELECT * FROM pages WHERE name = '$pg' AND status = 1 LIMIT 1"; // will create a query from all
$r = mysqli_query($connect, $q ); // the result of connect and query will be put to $r varialble but is unseen
$page = mysqli_fetch_assoc($r);  // this will fetch the result from $r and store it on the variable $page



?>
