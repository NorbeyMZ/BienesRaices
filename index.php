
<?php
    require 'includes/app.php';
    incluirTemplate('header',true);
?>


    <main class="contenedor seccion">
        <h1>Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>seguridad</h3>
                <p>Lorem Ipsum es simplemente el texto de 
                    relleno de las imprentas y archivos de 
                    texto. Lorem Ipsum ha sido el texto d
                    e relleno estándar de las industrias d
                    esde el año 1500, cuando un impresor 
                    (N. del T. persona que se dedica a la 
                    imprenta) desconocido usó una galería
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Mejores Precios</h3>
                    <p>Lorem Ipsum es simplemente el texto de 
                        relleno de las imprentas y archivos de 
                        texto. Lorem Ipsum ha sido el texto d
                        e relleno estándar de las industrias d
                        esde el año 1500, cuando un impresor 
                        N. del T. persona que se dedica a la 
                        imprenta desconocido usó una galería
                    </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono a tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem Ipsum es simplemente el texto de 
                    relleno de las imprentas y archivos de 
                    texto. Lorem Ipsum ha sido el texto d
                    e relleno estándar de las industrias d
                    esde el año 1500, cuando un impresor 
                    (N. del T. persona que se dedica a la 
                    imprenta) desconocido usó una galería
                </p>
            </div>

        </div>
    </main>
    <!-- .contenido-anuncio-->
    <section class="seccion contenedor">
        <h2>Propiedades en Venta</h2>
        <?php
            include 'includes/templates/anuncios.php';
        ?>
        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde"> ver todas</a>
        </div>
    </section>

<!-- seccion de contatar-->
 
    <section class="imagen-contacto">
        <h2>encuntra la casa de tus sueños</h2>
        <p>llena el formulario y un asesor se pondra en contacto</p>
        <a href="contacto.php" class="boton-amarillo"> contactanos</a>
    </section>

<!-- seccion de contatar-->

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">

            <h3>Nuestro Blog </h3>  

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source src="build/img/blog1.webp" type="imagen/webp">
                        <source src="build/img/blog1.jpg" type="imagen/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span>por <span>Admin</span></p>
                        <p>consejos para construir una terraza en tu casa</p>
                    </a>
                </div>

            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source src="build/img/blog2.webp" type="imagen/webp">
                        <source src="build/img/blog2.jpg" type="imagen/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Decora tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span> 20/10/2021 </span> por <span> Admin</span></p>
                        <p>mejora el entorno de tu vivneda con esta guia </p>
                    </a>
                </div>
            </article>       
        </section>

        <section class="testimoniales ">
            <h3>testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                   el personal es amable y claro con su informacuion, 
                </blockquote>
                <p>- User feliz </p>
    
            </div>
         </section>   
        

    </div>

    <!-- footer-->
<?php
   incluirTemplate('footer');
?>