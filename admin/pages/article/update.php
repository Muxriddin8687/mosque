<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = test_input($_REQUEST['id']);
$title = test_input($_REQUEST['title']);
$text = test_input($_REQUEST['text']);
$author = test_input($_REQUEST['author']);
$position = test_input($_REQUEST['position']);

$sql = "UPDATE article SET
            `title`='".$title."',
            `author`='".$author."',
            `position`='".$position."',
            `text`='".$text."'
        WHERE id=".$id." ";

if(mysqli_query($link,$sql)) {
} else{
    echo 'false';
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
        if(file_exists('../../../assets/img/article/'.$id.'.jpg')){
            unlink('../../../assets/img/article/'.$id.'.jpg');
            move_uploaded_file($_FILES["photo"]["tmp_name"], "../../../assets/img/article/".$id.'.jpg');
        }
        echo "Your file was uploaded successfully.";
    } else{
        echo "Error: Rasmni yuklashga ruxsat berilmagan!";
    }
} else{
    echo "Rasmni yuklashda xatolik yuz berdi!";
}
?>