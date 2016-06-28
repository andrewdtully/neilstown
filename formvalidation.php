<?PHP
$message = "";
$max10 = "";
$min2 = "";
$set = "";
$exactly10 = "";
$max20secret = "";

if (isset($_POST['submit'])) {
// form was submitted
$max10 = $_POST["max10"];
$min2 = $_POST["min2"];
$set = $_POST["set"];
$exactly10 = $_POST["exactly10"];
$max20secret = $_POST["max20secret"];

if (!isset($max10) || $max10 == ""){
	$message1 = "<LI>Max 10 cannot be empty</LI>";
} elseif (strlen($max10) > 10) {
	$message1 = "<LI>Max 10 cannot exceed 10 characters</LI>";
	$max10 = "";
} else {
	$message1 = "<LI>Max 10 looks good!!</LI>";
}
	
if (!isset($min2) || $min2 == ""){
	$message2 = "<LI>Min 2 cannot be empty</LI>";
} elseif (strlen($min2) < 2) {
	$message2 = "<LI>Min 2 cannot be less than 2 characters</LI>";
	$min2 = "";
} else {
	$message2 = "<LI>Min 2 looks good!!</LI>";
}
$setArray = array("Banana", "Strawberry", "Orange", "Apple");	
if (!isset($set) || $set == ""){
	$message3 = "<LI>Set cannot be empty</LI>";
} elseif (!in_array($set, $setArray)) {
	$message3 = "<LI>Set must contain either Banana, Strawberry, Orange, or Apple</LI>";
	$set = "";
} else {
	$message3 = "<LI>Set looks good!!</LI>";
}
	
if (!isset($exactly10) || $exactly10 == ""){
	$message4 = "<LI>exactly10 cannot be empty</LI>";
} elseif (strlen(trim($exactly10)) != 10) {
	$message4 = "<LI>exactly10 must contain exactly 10 characters</LI>";
	$exactly10 = "";
} else {
	$message4 = "<LI>exactly10 looks good!!</LI>";
}
	
if (!isset($max20secret) || $max20secret == ""){
	$message5 = "<LI>max20secret cannot be empty</LI>";
} elseif (!preg_match("/secret/", $max20secret) || strlen($max20secret) > 20) {
	$message5 = "<LI>max20secret must contain a maximum of 20 and include the string 'secret'</LI>";
	$max20secret = "";
} else {
	$message5 = "<LI>max20secret looks good!!</LI>";
}
	
$message = "<h1>Form Status:</h1><UL>{$message1} {$message2} {$message3} {$message4} {$message5}</UL>";
} else {
	echo "<h1>Please submit the form!</h1>";
}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title>Form Validation</title>
	</head>
	<body>
	
	<?php echo $message; ?><br>
		
		<form action="160627-2218.php" method="post">
		<table>
		<TR><TD>Max 10 Chars: </TD><TD><input type="text" name="max10" value="<?php echo htmlspecialchars($max10); ?>"></TD>
		 <TR><TD>Min 2 Chars: </TD><TD><input type="text" name="min2" value="<?php echo htmlspecialchars($min2); ?>"><TD>
		 <TR><TD>Set: </TD><TD><input type="text" name="set" value="<?php echo htmlspecialchars($set); ?>"><TD>
		 <TR><TD>Exactly 10 Chars: </TD><TD><input type="text" name="exactly10" value="<?php echo htmlspecialchars($exactly10); ?>"><TD>
		 <TR><TD>Max 20 secret: </TD><TD><input type="text" name="max20secret" value="<?php echo htmlspecialchars($max20secret); ?>"><TD>
		  <input type="submit" name="submit" value="Submit">
		</form>
	

	</body>
</html>
