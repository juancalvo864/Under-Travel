<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/template.css">
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
                    <a href="index.php?route=home">Logout</a>
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
                        $_GET['route'] == "users" 
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
    
</body>
</html>