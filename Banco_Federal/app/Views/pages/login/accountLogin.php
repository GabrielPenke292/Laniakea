<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>BFL - Login</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="assets/template/login/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="assets/template/login/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<form action="<?= BASE_URL . 'login' ?>" method="post">
			<div class="login-box animated fadeInUp">
				<div class="box-header">
					<h2>Acessar conta</h2>
				</div>
				<label for="id">ID</label>
				<br />
				<input type="number" name='id' id="id">
				<br />
				<label for="password">Senha</label>
				<br />
				<input type="password" name='password' id="password">
				<br />
				<button type="submit">Acessar</button>
				<br />
				<a href="#">
					<p class="small">Esqueceu sua senha?</p>
				</a>
				<a href="account-login-administrative">
					<p class="small">Adminstrativo?</p>
				</a>
			</div>
		</form>
	</div>
</body>

<script>
	$(document).ready(function() {
		$('#logo').addClass('animated fadeInDown');
		$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>