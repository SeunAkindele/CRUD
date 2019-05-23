<?php include("include/initialise.php"); ?>
<?php 
	if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1){
		
			redirect("admin.php");
		
	}elseif(isset($_SESSION['user_id']) && $_SESSION['user_id'] != 1){
		
			redirect("user.php");
		
	}
?>
<html>
<head>
<link href='google-fonts/style.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
	<!-- <script src="js2/index2.js"></script>	 -->

	<?php 
		
		if(isset($_POST['LOGIN'])) {
			$username = trim($_POST['username']); 
			$password = trim($_POST['password']);

			$user_found = User::verify_user($username, $password);

			if($user_found){
				$session->login($user_found);
				if($user_found->username === "Admin") {
					redirect("admin.php");
				}else {
					redirect("user.php");
				}
			}else{
				$error = "Hmm, I don't know you";
			}
		}else{
			$username = "";
			$password = "";
			$error="";
		}
	?>

	<body class="body">
		<div class="wrapper">
			<form class="login" action="index.php" method="POST">						
				<p class="title">Central Login</p>
				<?php echo $error; ?>
				<input type="text" name="username" placeholder="Username" autofocus required/>
				<i class="fa fa-user"></i>
				<input type="password" placeholder="Password" name="password" required/>
				<i class="fa fa-key"></i>
				<!-- <a href="#">Forgot your password?</a> -->
				<button type="submit" name="LOGIN">
					<span><b>Login</b></span>
				</button>
			</form>
		</div>
		<!-- <script src='js2/index3.js'></script>
		<script src="js2/index.js"></script> -->
	</body>
</html>