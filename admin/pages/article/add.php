<?php
include "../../inc/header.php";

echo '<title>Мақола</title>';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                <div class="card shadow mb-4 border-bottom-danger">
                    <div class="card-body">
                    
                        <h3>Мақола қушиш</h3>
                        <div class="float-right" style="margin-top:-40px;">
                            <a href="index.php" class="btn btn-danger btn-sm float-right">Орқага</a>
                        </div>
                        
                        <form action="save.php" method="POST" class="mt-4"  enctype="multipart/form-data" >
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="title" placeholder="Мақола мавзуси" required>
                            </div>

                            <div class="input-group mb-3">
                                <textarea type="text" name="text" rows="5" class="form-control" placeholder="Мақола матни" required ></textarea>
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="author" placeholder="Мақола муаллифи" required>
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" name="position" class="form-control" placeholder="Муаллиф лавозими" >
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