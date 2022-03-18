<?php
    if(isset($_GET["id"])){
        include "../inc/header.php";
        include "../admin/inc/connect.php";

        $result = mysqli_query($link, "SELECT * FROM article WHERE id={$_GET['id']}");
        $res = $result->fetch_assoc();

        $banner_img = "url(../assets/img/carousel/01.jpeg)";
        include "../parts/_banner_image.php";
?>
<!-- maqolani kattalashgani, bir ozi durgani -->
<div class="container">
    <div class="row shadow">
        <div class="my-3 mx-auto py-3 col-11 col-sm-10 col-md-6 col-lg-4 col-xl-4">
            <img src="../assets/img/article/<?=$res['id']?>.jpg" class="img-fluid rounded">
            
        </div>
        <div class="my-3 mx-auto py-3 col-11 col-sm-10 col-md-6 col-lg-8 col-xl-8">
            <h4 class="text-black-50 pt-3"><?=$res['title']?></h4>
            <p><?=date_format(date_create($res['create_at']), 'Y m d')?></p>
            <p><?=$res['text']?></p>
            <h6 class="text-right"><?=$res['author']?></h6>
            <h6 class="text-right"><?=$res['position']?></h6>
        </div>
    </div>
</div>

<?php
    include "../inc/footer.php";
}else{
    echo "Hurmatli foydalanuvchi web saytimmizda xatolik vujudga keldi iltimos orqaga qayting!!! <a href=\"../\">Bosh sahifa</a>";
}
?>