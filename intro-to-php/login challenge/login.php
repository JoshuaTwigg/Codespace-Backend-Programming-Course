<? session_start();
    print $_SESSION['login'];
?>
<?php


$firstName = $_POST['name'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$_SESSION['name'] = $firstName;
$_SESSION['lastName'] = $lastName;
$_SESSION['email'] = $email;

 print "<h1> welcome $firstName $lastName</h1>";
?>

<form action="login.php" method="post">

<label for="lastName">2nd email</label>
<input type="text" name="emailTwo">

<input type="submit">
</form>

