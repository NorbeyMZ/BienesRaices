<?php
    use App\Propiedad;
    
   
    if($_SERVER['SCRIPT_NAME'] === '/anuncios.php'){
        $propiedad = Propiedad::all();
    } elseif($_SERVER['SCRIPT_NAME'] === '/index.php') {
        $propiedad = Propiedad::get(3);
    }

?>

<div class="contenedor-anuncios">

    <?php foreach($propiedad as $propiedad){ ?>

    <div class="anuncio"> <!-- anuncio-->
        <div class="imagen-anuncio">
            <img loading="lazy" src="/imagenes/<?php echo $propiedad->imagen;?>" alt="anuncio">
        </div>
            
            <div class="contenido-anuncio"><!-- .contenido-anuncio-->
                <h3> <?php echo $propiedad->titulo; ?> </h3>
                    <p><?php echo $propiedad->descripcion; ?></p>
                    <p class="precio">$<?php echo number_format($propiedad->precio); ?></p>
                    <ul class="iconos-caracteristicas">
                        <li>                  
                            <img class="icono" loading="lazy"  src="build/img/icono_wc.svg" alt="icono wc">
                            <p><?php echo $propiedad->wc;?></p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy"  src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                            <p><?php echo $propiedad->estacionamiento; ?></p>
                        </li>
                        
                        <li>
                            <img class="icono" loading="lazy"  src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                            <p><?php echo $propiedad->habitaciones; ?></p>
                        </li>
                    </ul>
                    <a href="anuncio.php?id=<?php echo $propiedad->id ;?>  " class="boton-amarillo-block"> ver propiedad</a>
                        
                    </div><!-- .contenido-anuncio-->
    </div><!-- anuncio-->
    <?php } ?>
</div><!-- .contenedor anuncio-->
