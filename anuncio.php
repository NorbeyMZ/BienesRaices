
<?php
    //obtener el id de la url
    $id = $_GET['id'];
    $id = filter_var($id,FILTER_VALIDATE_INT);
    if(!$id){
        header('Location: /');
    }

    require 'includes/app.php';
    $db = conectarDB();
    //consultar 
    $query = "SELECT * FROM propiedades WHERE id = ${id}";
    //obtener resuldatos
    $resultado = mysqli_query($db,$query);

    if(!$resultado->num_rows){
        header('Location: /');
    }

    $propiedad = mysqli_fetch_assoc($resultado);


    incluirTemplate('header');


?>


    <main class="contenedor seccion contenido-centrado ">
       
            <h1> <?php echo $propiedad['titulo']; ?></h1>
            <img  loading="lazy" src="/imagenes/<?php echo $propiedad['imagen'];?>" alt="anuncio">   

            <p><?php echo $propiedad['descripcion']; ?></p>
            <p class="precio precio-anuncio">$<?php echo number_format($propiedad['precio']); ?></p>
            <ul class="iconos-caracteristicas ">
                <li>                  
                    <img class="icono icono-anuncio" loading="lazy"  src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad['wc'];?></p>
                </li>

                <li>
                    <img class="icono icono-anuncio" loading="lazy"  src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento'];?> </p>
                </li>
                        
                <li>
                    <img class="icono icono-anuncio" loading="lazy"  src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                </li>
            </ul>
            <p><?php echo $propiedad['descripcion']; ?></p>
        
    
    </main>

<?php
   mysqli_close($db);
   incluirTemplate('footer');
?>
