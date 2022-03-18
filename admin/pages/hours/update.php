<?php
header('Location: index.php');
include('../../inc/connect.php');

$id = $_REQUEST["id"];
$tong = $_REQUEST['tong'];
$bomdod = $_REQUEST['bomdod'];
$quyosh = $_REQUEST['quyosh'];
$peshin = $_REQUEST['peshin'];
$asr = $_REQUEST['asr'];
$shom = $_REQUEST['shom'];
$xufton = $_REQUEST['xufton'];
$start_day = $_REQUEST['start_day'];
$end_day = $_REQUEST['end_day'];

$sql = "UPDATE `hours` SET 
            `tong`='{$tong}',
            `bomdod`='{$bomdod}',
            `quyosh`='{$quyosh}',
            `peshin`='{$peshin}',
            `asr`='{$asr}',
            `shom`='{$shom}',
            `xufton`='{$xufton}',
            `start_day`='{$start_day}',
            `end_day`='{$end_day}'
        WHERE id='{$id}' ";

if(mysqli_query($link,$sql)) {
} else{
    echo mysqli_error($link);
}

?>