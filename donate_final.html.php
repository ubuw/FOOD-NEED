//donate_final.html.php
<html>
<?php

if(isset($_GET['submit']))
{
	


	
	
	$db = mysqli_connect("localhost","root","","test");
	$query = "INSERT INTO author (name, email, type,time,donor,status)
SELECT name, email, type,time,donor,status
FROM temp;";

mysqli_query($db,$query);


$query_delete = "DELETE FROM temp";

mysqli_query($db,$query_delete);


header('Location:submission_final.html.php');
	
}


?>
</html>