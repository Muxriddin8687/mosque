<?php
include('../../inc/header.php');
include('../../inc/connect.php');

$sql = mysqli_query($link,"SELECT * FROM mosques WHERE id=".$_REQUEST['id']);
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
                                <input type="text" class="form-control" name="name" placeholder="Масжид номи" value="<?=$row['name']?>" >
                            </div>

                            <textarea type="text" name="about" rows="5" class="form-control" placeholder="Масжид хақида" ><?=$row['about']?></textarea>
                            <br />
                            <textarea type="text" name="adress" rows="3" class="form-control" placeholder="Масжид адреси" ><?=$row['adress']?></textarea>
                            <br />
                            <div class="input-group mb-3">
                                <input type="text" name="url" class="form-control" placeholder="Масжидга URL" value="<?=$row['url']?>" >
                            </div>

                            <br />
                                <img src="../../../assets/img/mosques/<?=$_REQUEST['id']?>.jpg" width="300px" alt="">
                            <br />
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