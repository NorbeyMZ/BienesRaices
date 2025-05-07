
<?php
    require 'includes/app.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Contactanos </h1>

        <picture>
            <source src="build/img/destacada3.webp" type="image/webp">
            <source src="build/img/destacada3.jpg" type="image/jpeg">
            <img  loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">
        </picture>

        <h2> Formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre :</label>
                <input type="text" placeholder="Tu Nombre" id="nombre" >

                <label for="email">E-mail :</label>
                <input type="email" placeholder="Tu E-mail" id="email" >
                
                <label for="telefono">Telefono :</label>
                <input type="tel" placeholder="Tu numero de telefono" id="telefono" >
             
                <label for="mensaje">Mensaje :</label>
                <textarea id="mensaje"></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion sobre la propiedad</legend>

                <label for="opcuiones">Vende o Compra :</label>
                <select name="campo" id="opcuiones">
                    <option value="" disabled selected>--seleccione--</option>
                    <option value="compra">comprar</option>
                    <option value="vende">vender</option>
                </select>

                
                <label for="presupuesto">Precio o Presupuesto :</label>
                <input id="presupuesto" type="number" placeholder="tu precio o presupuesto">
            </fieldset>

            <fieldset>
                <legend>Informacion Personal</legend>
                <p>como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono"> Telefono :</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contatar-email"> E-mail :</label>
                    <input name="contacto" type="radio" value="email" id="contatar-email">

                </div>

                <p>Si eligio telefono, elija la fecha y hora que desea ser contactado</p>

                <label for="fecha">fecha :</label>
                <input type="date"  id="fecha" >

                <label for="hora">hora :</label>
                <input type="time"  id="hora"  min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="enviar" class="boton-verde">


        
        </form>

    </main>

<?php
   incluirTemplate('footer');
?>