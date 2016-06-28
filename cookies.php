<?PHP
$name = "test";
$value = 123456;
$expire = time() + (60*60*24*7*2);
setcookie($name, $value, $expire);

//setcookie($name);
//setcookie($name, NULL, $expire);
//setcookie($name, $value, time() - 3600);
//setcookie($name, NULL, time() - 3600);
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Set Cookies</title>
	</head>
	<body>


	<?PHP
	if (isset($_COOKIE["test"])){
		$test = $_COOKIE["test"];
	} else {
		$test = "";
	}
		echo $test;
		
		
	?>

	
	</body>
</html>
