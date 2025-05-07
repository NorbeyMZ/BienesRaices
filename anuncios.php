
<?php
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
       <h2>casa y depas en venta</h2>
        
       <section class="seccion contenedor">
        <h2>Propiedades en Venta</h2>
        <?php
            $limite = 100;
            include 'includes/templates/anuncios.php';
        ?>   
    </section>
    </main>
<?php
   incluirTemplate('footer');
?>