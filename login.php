<?php
session_start();
ob_start();
include 'config.php';
include 'header.php';

	// Log in Part 
if (isset($_POST['login_btn'])){
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pass = mysqli_real_escape_string($con, sha1($_POST['password']));

	$sql = "SELECT * FROM user WHERE user_email = '{$email}' AND user_password = '{$pass}'";


	$query = mysqli_query($con, $sql);

	$data = mysqli_num_rows($query);

	if ($data) {
		$result = mysqli_fetch_assoc($query);
		$user_data = array($result['user_id'], $result['username'], $result['user_role']);
		$_SESSION['user_data'] = $user_data;
		header("location:admin/index.php");
	}else{
		$error = "<span> Invalid email/password </span>";
	}

}
?>

<div class="container">
	<div class="row">
		<div class="col-xl-5 col-md-6 m-auto p-5 mt-5 bg-secondary">
			<form action="" method="POST">

				<?php  
				if (!empty($error)) {
					echo "<p class='text-center bg-danger text-white p-2'>".$error."</p>";
				}
				?>
				

				<p class="text-center bg-primary text-white p-2">LPI Blood! Login your account.</p>
				<div class="mb-3">
					<input type="email" name="email" placeholder="Email" class="form-control" required>
				</div>
				<div class="mb-3">
					<input type="password" name="password" placeholder="Password" class="form-control" required>
				</div>
				<div class="mb-3">
					<input type="submit" name="login_btn" class="btn btn-primary" value="Login">
				</div>
				
				
			</form>
		</div>
	</div>
</div>

<?php include 'footer.php'; 




?>