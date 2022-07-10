<?php


foreach ($_FILES as $file){
    $target_file = $target_dir . basename($file["name"]);
    move_uploaded_file($file["tmp_name"], $target_file);
}



?>
<img src="<?php echo $target_file;?>" alt="picture of something">
<img src="<?php echo $target_file;?>" alt="picture of something">
<img src="<?php echo $target_file;?>" alt="picture of something">




