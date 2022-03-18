<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM mosques WHERE id=".$id;

if(mysqli_query($link,$sql)) {

    if(file_exists('../../../assets/img/mosques/'.$id.'.jpg')){
        unlink('../../../assets/img/mosques/'.$id.'.jpg');
    }

} else {
    echo 'false';
}
?>