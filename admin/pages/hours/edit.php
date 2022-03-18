<?php
include "../../inc/header.php";

echo '<title>Саотлар</title>';

// db connect
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
                                <a href="index.php" title="Орқага" class="btn btn-danger btn-sm ">Орқага</a>
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
                            <form method="post" action="update.php" class="container text-center text-light py-5">
                                <h3>Namoz Vaqti</h3>
                                <p>Xorazm viloyati Urganch</p>
                                <h5><?=date('Y m j', mktime())?> - <span id="hijriy"></span></h5>
                                <h6>
                                    <input type="hidden" name="id" value="<?=$item["id"]?>">
                                    <input type="date" name="start_day" class="btn bg-light my-3" value="<?=$item["start_day"]?>">&nbsp;дан
                                    <input type="date" name="end_day" class="btn bg-light" value="<?=$item["end_day"]?>">&nbsp;гача
                                </h6>
                                <div class="blocks d-block mt-5 pt-3">
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><input type="time" name="tong" class="btn bg-light w-100 mt-3" value="<?=$item["tong"]?>"></h4>
                                            <p>TONG</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><input type="time" name="bomdod" class="btn bg-light w-100 mt-3" value="<?=$item["bomdod"]?>"></h4>
                                            <p>BOMDOD</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><input type="time" name="quyosh" class="btn bg-light w-100 mt-3" value="<?=$item["quyosh"]?>"></h4>
                                            <p>QUYOSH</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><input type="time" name="peshin" class="btn bg-light w-100 mt-3" value="<?=$item["peshin"]?>"></h4>
                                            <p>PESHIN</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><input type="time" name="asr" class="btn bg-light w-100 mt-3" value="<?=$item["asr"]?>"></h4>
                                            <p>ASR</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <div id="block_hour">
                                            <h4><input type="time" name="shom" class="btn bg-light w-100 mt-3" value="<?=$item["shom"]?>"></h4>
                                            <p>SHOM</p>
                                        </div>
                                    </div>
                                    <div class="block ">
                                        <div id="block_hour">
                                            <h4><input type="time" name="xufton" class="btn bg-light w-100 mt-3" value="<?=$item["xufton"]?>"></h4>
                                            <p>XUFTON</p>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary float-right mt-3 mr-2" title="Ўрнатиш">Ўрнатиш</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>