//delete.php

<?php

$db = mysqli_connect("localhost","root","","test");

$data = $_GET['rn'];

$query = "DELETE FROM temp WHERE id = '$data'";

mysqli_query($db,$query);

header('Location:donate.html.php');








?>