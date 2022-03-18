
<?php
$photos = $table->getAll('galery');
$i=0;
?>
<!-- photos -->
<div class="container">
    <div class="row py-3" id="gallery" data-toggle="modal" data-target="#exampleModal">
        <?php foreach($photos as $item): ?>
            <div class="mx-auto my-1 col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                <img class="w-100" src="../assets/img/galery/<?=$item["id"]?>.jpg" data-target="#carouselExample" data-slide-to="<?=$i++?>">
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /photos -->

<style>
/* about us carousel */
    #galery .owl-carousel .owl-nav{
        position: absolute;
        bottom: 10%;
        left: 50%;
        outline: none;
        font-size: 40px;
    }
    
    #galery .owl-carousel .owl-nav button span,
    #galery .owl-carousel .owl-nav button span{
        text-shadow: 0px 0px 5px #fff;
    }
</style>

<!-- photos modal -->
<div class="modal w-100 h-100" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content w-100 h-100" role="document">
        <button type="submit" class="close my-2 text-right pr-5" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="font-s-24">&times;</span>
        </button>
        <!-- Carousel markup goes in the modal body -->                  
        <section id="galery">
            <div class="w-100 h-100 owl-carousel owl-theme">
                <?php foreach($photos as $item): ?>
                    <div class="item">
                        <div class="image1"
                            style="background-image: url(../assets/img/galery/<?=$item["id"]?>.jpg"
                        ></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</div>
<!-- /photos modal -->