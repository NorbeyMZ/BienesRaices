<fieldset>
    <legend>informacion general</legend>

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre del Vendedor" value="<?php
    echo s($vendedor->nombre);?>" >

    <label for="apellido">Apellido</label>
    <input type="text" id="apellido" name="vendedor[apellido]" placeholder="Nombre del Vendedor" value="<?php
    echo s($vendedor->apellido);?>" >

    <label for="telefono">Telefono</label>
    <input type="text" id="telefono" name="vendedor[telefono]" placeholder="Nombre del Vendedor" value="<?php
    echo s($vendedor->telefono);?>" >

</fieldset>
