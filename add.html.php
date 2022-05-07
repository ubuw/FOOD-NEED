//add.html.php

<?php

session_start();
$db = mysqli_connect("localhost","root","","test");

if(!$db)
	
	echo "Connection Failed";

echo "<br>";




$name = $_GET["food1"];
$quantity = $_GET["quantity"];

if(isset($_GET['add']))
{


	 if(isset($_GET["veg"]))
			 $type =  $_GET["veg"];
		 if(isset($_GET["nonveg"]))
			$type =   $_GET["nonveg"];
		if(isset($_GET["delivery"]))
			 $deliver =  $_GET["delivery"];
		 if(isset($_GET["takeaway"]))
			$deliver =   $_GET["takeaway"];
		if(isset($_GET["hour"]))
		{
		
			
			date_default_timezone_set('Asia/Kolkata');
$date = date('h:i:s',time());
$min =  $_GET["hour"];

$times = $min+$date;
	
		}
		
		$donor = $_SESSION["username"];
        $query_insert="INSERT INTO temp (name,email,type,time,donor,status)
VALUES ('$name','$quantity','$type','$min','$donor','$deliver');";
	mysqli_query($db,$query_insert);
	header('Location:donate.html.php');
	
}

if(isset($_GET['logout']))
{
	header('Location:logout.php');
}





?>