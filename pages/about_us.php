<?php
    include "../inc/header.php";

    $banner_img = "url(../assets/img/carousel/01.jpeg)";

    include "../parts/_banner_image.php";
?>
    <script>
    // mosque maps
    function initMap() {
        // The location of Uluru
        const uluru = { lat: 41.55633515362651, lng: 60.64192239373309 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }
    </script>

    <?php
        include "../parts/_galery.php";

        include "../parts/_about_text.php";
    ?>

        <!-- video map -->
        <div class="container">
            <div class="row">
                <div class="mx-auto py-2 col-11 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <video width="100%" height="auto" controls poster="../assets/img/galery/5.jpg" >
                        <source src="../assets/video/1.mp4" type="video/mp4">
                        <source src="../assets/video/1.ogg" type="video/ogg">
                        Your browser does not support HTML5 video.
                    </video>
                </div>

                <!-- map cection -->
                <div class="mx-auto py-2 col-11 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div id="map" class="w-100 h-100"></div>
                </div>
            </div>
        </div>
        <!-- /video map -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0ZlwMdcZ8TlWd_fINZVOb1cO5OYGihM0&callback=initMap" async defer></script>

<?php
    include "../inc/footer.php";
?>