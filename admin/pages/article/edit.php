<?php
include('../../inc/header.php');
include('../../inc/connect.php');

$sql = mysqli_query($link,"SELECT * FROM article WHERE id=".$_REQUEST['id']);
$row = $sql->fetch_assoc();

?>

    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                <div class="card shadow mb-4 border-bottom-danger">
                    <div class="card-body">
                    
                        <h3>Тахрирлаш</h3>
                        <div class="float-right" style="margin-top:-40px;">
                            <a href="index.php" class="btn btn-danger btn-sm float-right">Орқага</a>
                        </div>
                        
                        <form action="update.php" method="POST" class="mt-4"  enctype="multipart/form-data" >
                            <input type="hidden" value="<?=$_REQUEST['id']?>" name="id" />
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="title" placeholder="Мақола мавзуси" value="<?=$row['title']?>" required >
                            </div>

                            <div class="input-group mb-3">
                                <textarea type="text" name="text" class="form-control" rows="5" placeholder="Мақола матни" required ><?=$row['text']?></textarea>
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" name="author" class="form-control" placeholder="Мақола муаллифи" value="<?=$row['author']?>" required >
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" name="position" class="form-control" placeholder="Муаллиф лавозими" value="<?=$row['position']?>" >
                            </div>

                            <br />
                            <img src="../../../assets/img/article/<?=$row['id']?>.jpg" width="300px" alt="">
                            <br>
                            <p class="m-0">Rasmni almashtirish uchun 👇👇</p>
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="validateCustomFile" />
                                <label for="validateCustomFile" class="custom-file-label">Расм танланг...</label>
                            </div>

                            <button class="btn btn-primary mt-4 float-right">Сақлаш</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>