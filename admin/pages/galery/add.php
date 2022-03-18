<?php
include "../../inc/header.php";

echo '<title>Расм қўшиш</title>';
?>
    <div class="container-fluid">
        <div class="row">
            <div class="mx-auto col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                <div class="card shadow mb-4 border-bottom-danger">
                    <div class="card-body">
                    
                        <h3>Расм қўшиш</h3>
                        <div class="float-right" style="margin-top:-40px;">
                            <a href="index.php" class="btn btn-danger btn-sm float-right">Орқага</a>
                        </div>
                        
                        <form action="save.php" method="POST" class="mt-4"  enctype="multipart/form-data" >
                            <h5>5 MB dan oshmagan formati jpg,png bo'lgan rasm tanlang!</h5>
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