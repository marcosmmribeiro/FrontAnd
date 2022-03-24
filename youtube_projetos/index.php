<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Facebook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Open+Sans:wght@600;700&family=Roboto+Slab:wght@100&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>facebook</h2>
			</div><!--logo-->
				<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone:</p>
					<input type="email" />
				</div><!--form-element-->
				<div class="form-element">
					<p>Senha:</p>
					<input type="password" />
			 	</div><!--form-element-->
			 	<div class="form-element">
					<input type="submit" name="acao" value="Entrar" />
			 	</div><!--form-element-->
			</form><!--form-login-->
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="image/img_passoas.png"/>
			</div><!--img-pessoas-->

			<div class="abrir-conta">
				<h2>Abra sua conta</h2>
				<h3>É gratuito e sempre será</h3>
				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text">
					</div><!--w50-->

					<div class="w50">
						<input placeholder="Sobrenome" type="text">
					</div><!--w50-->

					<div class="w100">
						<input placeholder="E-mail" type="email">
					</div><!--w100-->

					<div class="w100">
						<input placeholder="Senha" type="password">
					</div><!--w100-->

					<div class="w100">
						<h2 style="font-size: 20px; margin-top: 10px; color: #1d2129;">Data de Nascimento:</h2>
						<select name="nascimento-dia" class="nascimento">
							<?php
								for($i = 1; $i <= 31; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php } ?>
						</select>
						<select name="nascimento-mes" class="nascimento">
							<option value="0">Janeiro</option>
							<option value="1">Fevereiro</option>
							<option value="2">Março</option>
							<option value="3">Abril</option>
							<option value="4">Maio</option>
							<option value="5">Junho</option>
							<option value="6">Julho</option>
							<option value="7">Agosto</option>
							<option value="8">Setembro</option>
							<option value="9">Outubro</option>
							<option value="10">Novembro</option>
							<option value="11">Dezembro</option>
						</select>
						<select name="nascimento-ano" class="nascimento">
							<?php
								for($i = 1960; $i <= 2022; $i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w100">
						<div class="input-radio">
							<input type="radio" name="sexo" value="Feminino">
							<h2>Feminino</h2>
						</div>
						<div class="input-radio">
							<input type="radio" name="sexo" value="Masculino">
							<h2>Masculino</h2>
						</div><!--input-radio-->

					</div><!--w100-->
					<div class="termos_face">
						<p>Ao clicar em Inscreva-se, você concorda com nossos <a href="#">Termos</a>,
                        <a href="#">Política de Dados</a> e <a href="#">Política de Cookies</a>. Você
                        pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
					</div><!--termos_face-->
					<div class="clear"></div>
					<div class="w100">
						<input type="submit" name="acao" value="Cadastrar!">
					</div><!--w100-->

					<div class="clear"></div>
				</form><!--criar-conta-->

			</div><!--abrir-conta-->

			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

	<section class="linguas">
		<div class="center">
			<a class="selected-linguas" href="#">Português (Brasil)</a>
			<a href="#">Inglês (Inglês)</a>
			<a href="#">Espanõl</a>
			<a href="#">Français (France)</a>
			<a href="#">Italiano</a>
			<a href="#">Deutch</a>
			<a href="#">Alemão</a>
			<a href="#">Mandarin</a>

		</div><!--center-->

		<div style="border: 0;padding-top: 10px;"class="center">
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
			<a href="#">Loren Ipsum</a>
		</div><!--center-->
	</section><!--linguas-->

</body>
</html>