<?php 

// $con = mysqli_connect("localhost", "root", "", "lpi_blod") or die("Database Not Connected!😕");

$server = "localhost";
$user_name = "root";
$pass = "";
$db = "lpi_blod";

$con = mysqli_connect($server, $user_name, $pass, $db);

if ($con) {
	// echo "Welcome";
}else{
	?>
	
	<script>
		alert("wrong db");
	</script>

	<?php
}


?>