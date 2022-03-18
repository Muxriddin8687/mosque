<?php
include "../../inc/header.php";

echo '<title>Саотлар</title>';

include('../../inc/connect.php');
$sql = mysqli_query($link,"SELECT * FROM `hours`");
$item = $sql->fetch_assoc();
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-5">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h3>Саотлар</h3>
                            <div class="">
                                <a href="edit.php" title="Қўшиш" class="btn btn-primary btn-sm "><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <!-- namaz hours -->
                        <div id="banner-img" class="d-flex"
                            style=" background-image: linear-gradient(rgb(255, 255, 255, 0.4), rgba(0,0,0, .5)), url(../../../assets/img/products/Mosque.jpg);
                                    background-image: -moz-linear-gradient(rgb(255, 255, 255, 0.4),rgba(0, 0, 0, .5)), url(../../../assets/img/products/Mosque.jpg);
                                    background-image: -o-linear-gradient(rgb(255, 255, 255, 0.4),rgba(0, 0, 0, .5)), url(../../../assets/img/products/Mosque.jpg);
                                    background-image: -webkit-linear-gradient(rgb(255, 255, 255, 0.4),rgba(0, 0, 0, .5)), url(../../../assets/img/products/Mosque.jpg);
                                    height: auto !important;"
                        >
                            <div class="container text-center text-light py-5">
                                <h3>Namoz Vaqti</h3>
                                <p>Xorazm viloyati Urganch</p>
                                <h5><?=date('Y m j', mktime())?> - <span id="hijriy"></span></h5>
                                <h6><?= $item["start_day"]; ?> дан <?= $item["end_day"]; ?> гача</h6>
                                <div class="blocks mt-5 pt-3">
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><?=date_format(date_create($item["tong"]), 'H:i')?></h4>
                                            <p>TONG</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><?=date_format(date_create($item["bomdod"]), 'H:i')?></h4>
                                            <p>BOMDOD</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><?=date_format(date_create($item["quyosh"]), 'H:i')?></h4>
                                            <p>QUYOSH</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><?=date_format(date_create($item["peshin"]), 'H:i')?></h4>
                                            <p>PESHIN</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><?=date_format(date_create($item["asr"]), 'H:i')?></h4>
                                            <p>ASR</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><?=date_format(date_create($item["shom"]), 'H:i')?></h4>
                                            <p>SHOM</p>
                                        </div>
                                    </div>
                                    <div class="block ">
                                        <div id="block_hour">
                                            <h4><?=date_format(date_create($item["xufton"]), 'H:i')?></h4>
                                            <p>XUFTON</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>