<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="public/template.css">
    <link rel="stylesheet" href="public/signup.css">
    <link rel="stylesheet" href="public/home.css">
    <link rel="stylesheet" href="public/login.css"> 
    <title>Document</title>
</head>
    <body>
        <header>
            <div class="container_header">
                <div class="titulo_nav">
                    <div class="container_titulo">
                        <h2 class="titulo_barra">|</h2>
                        <h2 class="titulo">Under Travel</h2>
                    </div>
                    <nav> 
                        <a href="index.php?route=home">Home</a>
                        <a href="index.php?route=login">Login</a>
                        <a href="index.php?route=users">Users</a>
                        <a href="index.php?route=signup">Sign up</a>
                        <a href="index.php?route=logout">Logout</a>
                    </nav>
                </div>
                <div class="container_subtitulo">
                    <h1>HORA DE VIAJAR</h1>
                    <p>Explora el mundo con Under Travel y despierta tu espíritu aventurero. En cada destino, creamos experiencias inolvidables para que tus viajes sean únicos. ¡Tu próxima aventura comienza aquí!
                    #UnderTravel #ViajesInolvidables</p>
                </div>
            </div>
            
        </header>
        <section>
            <?php 
                if (isset($_GET['route'])){
                    if(
                        $_GET['route'] == "logout"||
                        $_GET['route'] == "login" ||
                        $_GET['route'] == "home" ||
                        $_GET['route'] == "signup"||
                        $_GET['route'] == "users" ||
                        $_GET['route'] == "edit"
                    ){
                        include "views/pages/". $_GET["route"] .".php";
                    }else{
                        include "pages/error404.php";
                    }
                }else{
                    include "pages/home.php";
                }

            ?>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="views/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</body>
</html>