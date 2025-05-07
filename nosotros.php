
<?php
    require 'includes/app.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Sobre Nosotros </h1>
        <div class="contenido-sobrenosotros"> 
            <div class="imagen">
                <picture>
                    <source src="build/img/anuncio1.webp" type="imagen/webp">
                    <source src="build/img/anuncio1.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui 
                    officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem 
                    rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis 
                    est eligendi optio cumque nihil impedit quo minus id quod maxime placeat 
                    facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
                </p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
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
    </section>
    
<?php
   incluirTemplate('footer');
?>