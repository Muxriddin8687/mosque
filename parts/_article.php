<?php 

	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$start = ($page - 1) * 8;
	$result = mysqli_query($link, "SELECT * FROM article ORDER BY id DESC LIMIT {$start}, 8");
	$article = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$result1 = mysqli_query($link, "SELECT count(id) AS id FROM article");
	$custCount = mysqli_fetch_all($result1, MYSQLI_ASSOC);
	$total = $custCount[0]['id'];
	$pages = ceil( $total / 8 );

	$Previous = $page - 1;
	$Next = $page + 1;

    if ($page < 1 || $page > $pages) {
        echo "<script>alert(\"Iltimos foydalanish qoidalarini buzmang!\");</script>";
        echo '<script>window.location="index.php";</script>';
    } else{

?>
<!-- article section -->
<div id="article" class="container pt-4">
    <h3>Сўнги мақолалар</h3><hr>
    <div class="row">
        <?php
            foreach($article as $item):
        ?>
        <div class="my-3 mx-auto col-11 col-sm-6 col-md-4 col-lg-3 col-xl-3">
            <div class="card shadow border-0">
                <div class="card-img-top">
                    <a class="w-100 h-100 d-flex justify-content-center" href="article.php?id=<?=$item['id']?>">
                        <img class="img-fluid h-100 rounded" src="../assets/img/article/<?=$item['id']?>.jpg" alt="">
                    </a>
                </div>
                <div class="card-body">
                    <h6><?=$item['title']?></h6>
                    <p class="mb-2"><?=$item['text']?></p>
                    <a href="article.php?id=<?=$item['id']?>" class="float-right">Батафсил</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <nav aria-label="Page navigation" >
        <ul class="pagination my-3 text-center d-flex justify-content-center">
            <li class="border p-0 px-2 pb-1">
                <a <?php if($page!=1) echo "href=\"index.php?page={$Previous}\""?> aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php for($i = 1; $i<= $pages; $i++) : ?>
                <li class="border px-2 pb-1"><a <?php if($page!=$i)echo "href=\"index.php?page={$i}\"";?> ><?= $i; ?></a></li>
            <?php endfor; ?>
            <li class="border px-2 pb-1">
                <a  <?php if($page!=$pages){echo "href=\"index.php?page={$Next}\"";} ?> aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- /article section -->
<?php } ?>