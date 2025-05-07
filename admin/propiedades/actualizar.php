<?php

    use App\Propiedad;
    use App\Vendedor;
    use Intervention\Image\Drivers\Gd\Driver;
    use Intervention\Image\ImageManager as Image;
    require '../../includes/app.php';
    
    estaAutenticado();
    
   
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header('Location: /admin');
    }
   
    //obtener los datos de la propiedad 
    $propiedad =  Propiedad::find($id);
    //consultar los vendedores 
    $vendedores = Vendedor::all();
    //arreglo para validar formulario
    $errores = Propiedad::getErrores();

    //se ejecuta despues de que el susuario envia el formulario 
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
 
        //Asignar los atributos
        $args = $_POST['propiedad'];
        $propiedad->sincronizar($args);
        $errores = $propiedad->validar();
        $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg"; 

        if($_FILES['propiedad']['tmp_name']['imagen']) {
            $manager = new Image(Driver::class);
            $image = $manager->read($_FILES['propiedad']['tmp_name']['imagen'] )->cover(800, 600);
            $propiedad->setImagen($nombreImagen);
        }
       //revisar que los arreglos no tengan errores
       if(empty($errores)) {
        // Almacenar la imagen
            if($_FILES['propiedad']['tmp_name']['imagen']) {
                $image->save(CARPETA_IMAGENES . $nombreImagen);
            }
             $propiedad->guardar();
        }
}

incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1>Actualizar datos</h1>
        <a href="/admin" class="boton boton-verde">volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error;?>
            </div>
        <?php endforeach; ?>
        <form class="formulario" method="POST"  enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_productos.php'; ?>

            <input type="submit" value="Actualizar propiedad" class="boton boton-verde">
        </form>
    </main>
<?php
   incluirTemplate('footer');
?> 