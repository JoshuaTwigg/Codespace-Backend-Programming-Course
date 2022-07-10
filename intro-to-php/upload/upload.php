

<?php 


$target_dir = "C:\MAMP\htdocs\intro-to-php\upload\images";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);


?>
<img src="<?php echo $target_file;?>" alt="picture of something">


