<?php
if(isset( $_POST["submit"])){
    $name=$_FILES["photo"]["name"];
    $size=$_FILES["photo"]["size"];
    $type=$_FILES["photo"]["type"];
    $tmp_name=$_FILES["photo"]["tmp_name"];

    if($type=="image/jpeg" || $type=="image/png" || $type=="image/webp"){

        if($size/1024<=500){
            move_uploaded_file($tmp_name, "img/".$name);
            echo "<img src='img/$name' width='100' >";
        }else{
            echo "Size should be less then 500kb";
        }
    }else{
        echo "only jpg, png, webp formate uploaded";
       }
}

?>

<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
<input type="file" name="photo">
<input type="submit" name="submit" value="upload">

</form>