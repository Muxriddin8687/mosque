<?php
include('../admin/inc/connect.php');
$sql = mysqli_query($link,"SELECT * FROM `hours`");
$item = $sql->fetch_assoc();
?>
<!-- namaz hours -->
<div id="banner-img" class="d-flex"
    style=" background-image: linear-gradient(rgb(255, 255, 255, 0.4), rgba(0,0,0, .5)), url(../assets/img/products/Mosque.jpg);
            background-image: -moz-linear-gradient(rgb(255, 255, 255, 0.4),rgba(0, 0, 0, .5)), url(../assets/img/products/Mosque.jpg);
            background-image: -o-linear-gradient(rgb(255, 255, 255, 0.4),rgba(0, 0, 0, .5)), url(../assets/img/products/Mosque.jpg);
            background-image: -webkit-linear-gradient(rgb(255, 255, 255, 0.4),rgba(0, 0, 0, .5)), url(../assets/img/products/Mosque.jpg);
            height: auto !important;
            background-attachment: fixed;"
>
    <div class="container text-center text-light py-5">
        <h3>Намоз вақти</h3>
        <p>Xоразм вилояти Урганч</p>
        <h5><?=date('j:m:Y', mktime())?> - <span id="hijriy"></span></h5>
        <h6><?=date_format(date_create($item["start_day"]), 'j:m:Y');?> дан <?=date_format(date_create($item["end_day"]), 'j:m:Y');?> гача</h6>
        <div class="blocks mt-5 pt-3">
            <div class="block">
                <div id="block_hour">
                    <h4><?=date_format(date_create($item["tong"]), 'H:i')?></h4>
                    <p>ТОНГ</p>
                </div>
            </div>
            <div class="block">
                <div id="block_hour">
                    <h4><?=date_format(date_create($item["bomdod"]), 'H:i')?></h4>
                    <p>БОМДОД</p>
                </div>
            </div>
            <div class="block">
                <div id="block_hour">
                    <h4><?=date_format(date_create($item["quyosh"]), 'H:i')?></h4>
                    <p>ҚУЁШ</p>
                </div>
            </div>
            <div class="block">
                <div id="block_hour">
                    <h4><?=date_format(date_create($item["qiyom"]), 'H:i') ?? "13:30"; ?></h4>
                    <p>ҚИЁМ</p>
                </div>
            </div>
            <div class="block">
                <div id="block_hour">
                    <h4><?=date_format(date_create($item["peshin"]), 'H:i')?></h4>
                    <p>ПЕШИН</p>
                </div>
            </div>
            <div class="block">
                <div id="block_hour">
                    <h4><?=date_format(date_create($item["asr"]), 'H:i')?></h4>
                    <p>АСР</p>
                </div>
            </div>
            <div class="block">
                <div id="block_hour">
                    <h4><?=date_format(date_create($item["shom"]), 'H:i')?></h4>
                    <p>ШОМ</p>
                </div>
            </div>
            <div class="block ">
                <div id="block_hour">
                    <h4><?=date_format(date_create($item["xufton"]), 'H:i')?></h4>
                    <p>ХУФТОН</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /namaz hours -->