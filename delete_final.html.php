//delete_final

//delete.php

<?php

$db = mysqli_connect("localhost","root","","test");

$data = $_GET['rn'];

$query = "DELETE FROM author WHERE id = '$data'";

mysqli_query($db,$query);

header('Location:submission_final.html.php');








?>