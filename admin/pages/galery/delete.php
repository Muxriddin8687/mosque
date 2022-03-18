<?php

$id = $_GET['id'];
header('Location: index.php');
include('../../inc/connect.php');

$sql = "DELETE FROM galery WHERE id=".$id;

if(mysqli_query($link,$sql)) {

    if(file_exists('../../../assets/img/galery/'.$id.'.jpg')){
        unlink('../../../assets/img/galery/'.$id.'.jpg');
    }

} else {
    echo 'false';
}
?>