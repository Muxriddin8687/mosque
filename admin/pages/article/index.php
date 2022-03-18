<?php
include "../../inc/header.php";

echo '<title>Мақола</title>';
$article = $table->getAll();
$i=1;
?>
    <div class="container" id="article">
        <div class="card border-0 mb-5">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h3>Мақолалар</h3>
                    <div class="">
                        <input type="search" class="btn border p-0 pb-1 w-75" id="myInput" placeholder="Қидирув...">
                        <a href="add.php" title="Қўшиш" class="btn btn-primary btn-sm "><i class="fa fa-plus"></i></a>
                    </div>
                </div>
                    <hr>
                <section id="article">
                    <?php foreach($article as $item): ?>
                        <div id="search_content" class="row shadow py-2">
                            <div class="mx-auto py-2 col-11 col-sm-10 col-md-6 col-lg-4 col-xl-4">
                                <img src="../../../assets/img/article/<?=$item['id']?>.jpg" class="img-fluid rounded">
                            </div>
                            <div class="py-2 mx-auto col-11 col-sm-10 col-md-5 col-lg-7 col-xl-7">
                                <h4 class="text-black-50 py-1"><?=$item['title']?></h4>
                                <p><?=$item['text']?></p>
                                <span class="text-right d-block font-weight-bold"><?=$item['author']?></span>
                                <span class="text-right d-block font-weight-bold"><?=$item['position']?></span>
                            </div>
                            <div class="py-2 mx-auto pb-2 col-11 col-sm-10 col-md-1 col-lg-1 col-xl-1">
                                <a href="edit.php?id=<?= $item['id']; ?>" title="Тўғирлаш" class="btn float-right p-0 py-1 px-2 border-info text-info m-1"><i class="fa fa-pencil"></i></a>
                                <a href="delete.php?id=<?= $item['id']; ?>" title="Ўчириш" class="btn float-right p-0 py-1 px-2 border-danger text-danger m-1"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </section>
            </div>
        </div>
    </div>
    <script>
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#article #search_content").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    </script>
</body>
</html>