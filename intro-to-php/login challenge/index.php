
<? session_start();?>

<?php $_SESSION['login'] = "yes";
print $_SESSION['login'];

?>

<form action="login.php" method="post">

<label for="name">name</label>
<input type="text" name="name">

<label for="lastName">surname</label>
<input type="text" name="lastName">

<label for="lastName">email</label>
<input type="text" name="email">

<input type="submit">
</form>


<?php $_SESSION['name'] = 'name'          ?>