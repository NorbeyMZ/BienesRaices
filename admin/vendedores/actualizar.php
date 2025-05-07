<?php
    require '../../includes/app.php';
    use App\Vendedor;
    estaAutenticado();

    // Validar que el id sea un numero
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if(!$id) {
        header('Location: /admin');
    }

    // Obtener los datos del vendedor
    $vendedor = Vendedor::find($id);
    $errores = Vendedor::getErrores();

    if($_SERVER['REQUEST_METHOD']=== 'POST') {
        // Asignar los valores
        $args = $_POST['vendedor'];
        // Sincronizar el objeto con los datos del formulario
        $vendedor->sincronizar($args);
        // Validar los datos
        if($vendedor->validar()){
            // Actualizar el vendedor
            $vendedor->guardar();
        }
    }

    incluirTemplate('header');
?>
    <main class="contenedor seccion">
    <h1> Actualziar Vendedor</h1>
    <a href="/admin" class="boton boton-verde">volver</a>

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error;?>
        </div>
    <?php endforeach; ?>
    <form class="formulario" method="POST">
        
        <?php include '../../includes/templates/formulario_vendedores.php'; ?>

        <input type="submit" value="Guardar Cambios" class="boton boton-verde">
    </form>
</main>
<?php
incluirTemplate('footer');
?> 