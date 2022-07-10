
<?php if (!$_POST){ ?>
<form action="index3.php" method="post">

<label for="name">First Name</label>
<input type="text" name="name">

<label for="lastName">Last Name</label>
<input type="text" name="lastName">

<input type="submit">
</form>

<?php } else {

    $firstName = $_POST['name'];
    $lastNamme = $_POST['lastName'];
    echo "<p>Hello $firstName $lastNamme</p>";
}


