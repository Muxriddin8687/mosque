<?php
include "../../inc/header.php";

echo '<title>Галерея</title>';
$photos = $table->getAll('galery');
?>
    <div class="container">
        <div class="d-flex justify-content-between border-bottom">
            <h3>Галерея</h3>
            <div class="">
                <a href="add.php" title="Қўшиш" class="btn btn-primary btn-sm "><i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="row py-4">
            <?php foreach($photos as $item): ?>
                <div class="mx-auto pb-2 col-11 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <img src="../../../assets/img/galery/<?=$item["id"]?>.jpg" class="img-fluid">
                    <a href="delete.php?id=<?=$item["id"]?>" class="btn btn-danger position-absolute" style="right:1rem;"><i class="fa fa-trash"></i></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>