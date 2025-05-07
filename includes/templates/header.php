
<?php 
    if(!isset($_SESSION['login'])){
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>    
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/index.php">
                    <img src="/build/img/logo.svg" alt="logotipo">                   
                </a>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="cambio de tema ">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">blog</a>
                        <a href="contacto.php">contacto</a>
                        <?php if($auth){ ?>
                            <a href="/cerrar-sesion.php">Cerrar Sesion</a>
                        <?php } ?>
                    </nav>
                </div>     
            </div><!-- barra-->
            <?php if($inicio){?>
                <h1> Venta de Casas, Departamentos, Fincas, Lotes </h1>
            <?php } ?>
        </div> 
    </header>