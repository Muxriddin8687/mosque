<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST['id'];
$name = test_input($_REQUEST['name']);
$about = test_input($_REQUEST['about']);
$adress = test_input($_REQUEST['adress']);
$url = test_input($_REQUEST['url']);

$sql = "UPDATE mosques SET 
            `name`='{$name}',
            `about`='".$about."',
            `adress`='".$adress."',
            `url`='".$url."'
        WHERE id=".$id." ";

if(mysqli_query($link,$sql)) {
} else{
    echo mysqli_error($link);
}

if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    $filename = $_FILES["photo"]["name"];
    $filetype = $_FILES["photo"]["type"];
    $filesize = $_FILES["photo"]["size"];

    // Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

    // Verify file size - 5MB maximum
    $maxsize = 5 * 1024 * 1024;
    if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

    // Verify MYME type of the file
    if(in_array($filetype, $allowed)){
        if(file_exists('../../../assets/img/mosques/'.$id.'.jpg')){
            unlink('../../../assets/img/mosques/'.$id.'.jpg');
            move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../assets/img/mosques/".$id.'.jpg');
        }
        echo "Your file was uploaded successfully.";
    } else{
        echo "Error: Rasmni yuklashga ruxsat berilmagan!";
    }
}
?>