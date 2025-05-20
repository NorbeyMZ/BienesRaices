
<?php
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
       <h2>Propiedades en Venta</h2>

        <?php
            $limite = 100;
            include 'includes/templates/anuncios.php';
        ?>   
    </section>
    <a href="index.php" class="boton-amarillo">Volver</a>
    </main>
<?php
   incluirTemplate('footer');
?>