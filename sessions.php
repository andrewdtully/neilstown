<?PHP
session_start();

?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Session</title>
	</head>
	<body>
<?PHP
	$_SESSION["first_name"] = "Andrew";
	$name = $_SESSION["first_name"];
	echo $name;
?>
	</body>
</html>
