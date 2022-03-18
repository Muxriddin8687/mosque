<?php
include "../../inc/header.php";

echo '<title>Масжидлар</title>';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                <div class="card shadow mb-4 border-bottom-danger">
                    <div class="card-body">
                    
                        <h3>Масжидлар қушиш</h3>
                        <div class="float-right" style="margin-top:-40px;">
                            <a href="index.php" class="btn btn-danger btn-sm float-right">Орқага</a>
                        </div>
                        
                        <form action="save.php" method="POST" class="mt-4"  enctype="multipart/form-data" >
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Масжид номи" required>
                            </div>

                            <textarea type="text" rows="5" name="about" rows="3" class="form-control" placeholder="Масжид хақида" required></textarea>
                            <br />
                            <textarea type="text" rows="3" name="adress" rows="3" class="form-control" placeholder="Масжид адреси" required></textarea>
                            <br />
                            <div class="input-group mb-2">
                                <input type="text" name="url" class="form-control" placeholder="Масжидга URL">
                            </div>

                            <br />
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="validateCustomFile" required />
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