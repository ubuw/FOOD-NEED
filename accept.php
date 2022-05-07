//accept.php
<?php

$id = $_GET["id"];
$query = "UPDATE request
SET state = '1'
WHERE id = '$id';";
$db = mysqli_connect("localhost","root","","test");
mysqli_query($db,$query);

 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Request Accepted');
    window.location.href='donate.html.php';
    </script>");
 


?>



