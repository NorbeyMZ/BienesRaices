
<?php
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        
        <h1>Nuestro Blog </h1>  

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog1.webp" type="imagen/webp">
                    <source src="build/img/blog1.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/10/2021</span>por <span>Admin</span></p>
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
                <a href="entrada.html">
                    <h4>Decora tu hogar</h4>
                    <p>Escrito el: <span> 20/10/2021 </span> por <span> Admin</span></p>
                    <p>mejora el entorno de tu vivneda con esta guia </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog3.webp" type="imagen/webp">
                    <source src="build/img/blog3.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Decora tu hogar</h4>
                    <p>Escrito el: <span> 20/10/2021 </span> por <span> Admin</span></p>
                    <p>mejora el entorno de tu vivneda con esta guia </p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source src="build/img/blog4.webp" type="imagen/webp">
                    <source src="build/img/blog4.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>Decora tu hogar</h4>
                    <p >Escrito el: <span> 20/10/2021 </span> por <span> Admin</span></p>
                    <p>mejora el entorno de tu vivneda con esta guia </p>
                </a>
            </div>
        </article>
        
    

    </main>

<?php
   incluirTemplate('footer');
?>