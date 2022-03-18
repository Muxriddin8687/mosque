<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM article WHERE id=".$id;

if(mysqli_query($link,$sql)) {

    if(file_exists('../../../assets/img/article/'.$id.'.jpg')){
        unlink('../../../assets/img/article/'.$id.'.jpg');
    }

} else {
    echo 'false';
}
?>