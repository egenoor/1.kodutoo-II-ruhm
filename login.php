

<?php
	
	//var_dump($_GET);
	//echo "<br>";
	//var_dump($_POST);
	
	$signupEmailError = "";
	$signupPasswordError = "";
	$signupCommentError = "";
	
	// kas e/post oli olemas
	if ( isset ( $_POST["signupEmail"] ) ) {
		
		if ( empty ( $_POST["signupEmail"] ) ) {
			
			// oli email, kuid see oli tühi
			$signupEmailError = "See väli on kohustuslik!";
			
		}
		
	}
	
	if ( isset ( $_POST["signupPassword"] ) ) {
		
		if ( empty ( $_POST["signupPassword"] ) ) {
			
			// oli password, kuid see oli tühi
			$signupPasswordError = "See väli on kohustuslik!";
			
		} else {
			
			// tean et parool on ja see ei olnud tühi
			// VÄHEMALT 8
			
			if ( strlen($_POST["signupPassword"]) < 8 ) {
				
				$signupPasswordError = "Parool peab olema vähemalt 8 tähemärkki pikk";
				
			}
			
		}
		
		if (isset ( $_POST["comment"] ) ) {
		
		if ( empty ( $_POST["comment"] ) ) {
			
			//kommentaar oli tühi
			$signupCommentError = "See väli on kohustuslik!" ;
		}
		
	}
		
		
	}
	
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise lehekülg</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="loginEmail" type="email">
			
			<br><br>
			
			<input name="loginPassword" type="password" placeholder="Parool">
			
			<br><br>
			
			<input type="submit" value="Logi sisse">
			
		</form>
		
		<h1>Loo kasutaja</h1>
		
		<form method="POST">
			
			<label>E-post</label><br>
			<input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>
			
			<input name="signupPassword" type="password" placeholder="Parool"> <?php echo $signupPasswordError; ?>
			
			<br><br>
			
			<label>Lehekülg</label><br>
			<input type="text" name="website">
			
			<br><br>
			
			<label>Kommentaar</label><br>
			<textarea name="comment" rows="5" cols="40"></textarea> <?php echo $signupCommentError; ?>
			
			<br><br>
			
			<label>Vanus</label><br>
			<input name="signupAge" type="age">
			
			<br><br>
			
			<label>Sugu</label><br>
			<input type="radio" name="gender" value="female">Naine	
			<input type="radio" name="gender" value="male">Mees
			
			<br><br>
			
			<input type="submit" value="Loo kasutaja">
			
		</form>
		
		
	</body>
</html>
