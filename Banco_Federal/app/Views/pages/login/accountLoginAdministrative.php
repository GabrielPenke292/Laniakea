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
		<form action="<?= BASE_URL . 'login/administrativo' ?> " method="post">

			<div class="login-box animated fadeInUp">
				<div class="box-header">
					<h2>Acessar conta</h2>
				</div>
				<label for="username">Usuario</label>
				<br />
				<input type="text" id="username" name="username">
				<br />
				<label for="password">Senha</label>
				<br />
				<input type="password" id="password" name="password">
				<br />
				<button type="submit">Acessar</button>
				<br />
				<!-- <a href="#">
					<p class="small">Esqueceu sua senha?</p>
				</a>
				<a href="account-login">
					<p class="small">cliente?</p>
				</a> -->
			</div>
		</form>
		<?php if (isset($_SESSION['error'])) : ?>
			<div class="alert alert-danger" role="alert">
				<p class="bg-danger">Deu ruim aq!</p>
			</div>
		<?php endif; ?>
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