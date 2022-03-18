<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Oxun Bobo Jome Masjidi</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/Jquery 3.3.1.JS"></script>

  <style>
  .colorgraph {
    height: 7px;
    border-top: 0;
    background: #c4e17f;
    border-radius: 5px;
    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  }
  </style>

</head>

<body>

  <div class = "container">
    <div class="row pt-5">
      <div class="mx-auto col-11 col-sm-9 col-md-6 col-lg-5 col-xl-4">
        <form class="login text-center">
            <h4>Хуш келибсиз!</h4>
            <h3>Административная часть</h3>
            <hr class="colorgraph">
            <input type="text" class="form-control my-3" id="username" placeholder="Логин" required="" autofocus="" />
            <input type="password" class="form-control mb-4" id="password" placeholder="Пароль" required="" />     		  
            <button class="btn btn-primary btn-block" style="margin-top:-10px" name="Submit" value="Login" type="Submit">Кириш</button>  			
            <br />
            <h5 style="text-align:center; color:red;display:none;margin-bottom:15px" class="error_alert">Неверный логин или пароль</h5>
        </form>
      </div>
    </div>
  </div>

<script type="text/javascript">

    $('.login').submit(function() {
        checkLogin();
    });

    $('.login').submit(function() {
        return false;
    });

    function checkLogin()
    {
        $.ajax({
            url: "checkuser.php",
            type: "POST",
            data: {
              username: $("#username").val(),
              password: $("#password").val()
            },
            success: function(response)
            {
              alert(response);
              if(response == 'true'){
                window.location.href = 'pages/hours/';
              }
              else{
                $(".error_alert").fadeIn(500);
                setTimeout(function(){ $(".error_alert").fadeOut(500);},2500);
              }
            }
        });
    }

</script>

</body>
</html>