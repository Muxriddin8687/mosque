<!-- mosques -->
<div  class="container py-3">
<?php
    $mosques = $table->getAll("mosques");
    foreach($mosques as $item):
?>
    <div class="row shadow mb-3 pl-1 pr-2 py-2">
        <div class="mx-auto col-11 .col-sm-11 col-md-4 col-lg-4 col-xl-4">
            <img src="../assets/img/mosques/<?=$item["id"]?>.jpg" alt="" class="img-fluid">
        </div>
        <div class="mx-auto p-2 col-11 .col-sm-11 col-md-8 col-lg-8 col-xl-8">
            <h5><?=$item["name"]?></h5>
            <p><?=$item["about"]?></p>
            <h6 class="text-right"><?=$item["adress"]?></h6>
            <a class="float-right" href="<?=$item["url"]?>">Боғланиш</a>
        </div>
    </div>
<?php
    endforeach;
?>
</div>
<!-- /mosques -->