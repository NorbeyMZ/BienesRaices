
<?php
    require 'includes/app.php';
    $db = conectarDB();
    //autenticar el usuario
 
    $errores = [];
 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
        //echo "<pre>";
        //var_dump($_POST);
        //echo "</pre>";
        $email =mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password =mysqli_real_escape_string ($db, $_POST['password']);    
         
     
        if(!$email){
            $errores[] = "El email es obligatorio o no es valido";
        }
        if(!$password){
            $errores[] = "El password es obligatorio";
        }

        if(empty($errores)){
             //revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '$email'"; 
            $resultado = mysqli_query($db, $query);
              
            if($resultado -> num_rows){
                //revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);    
                //verificar si el password es correcto o no
                $auth = password_verify($password, $usuario['password']);

                //var_dump($usuario);

                //var_dump($password);

                if($auth){
                    session_start();
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;
                    header('Location: /admin');

                }else{  
                    $errores[] = "El password es incorrecto";
                    
                }   
            
            }else{
                $errores[] = "El usuario no existe";
            }
        } 
    }
    //incluye el header
  
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1> iniciar sesion </h1>
        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>
        
        <form method="POST" class="formulario" >
        <fieldset>
                <legend>email y password</legend>

                <label for="email">E-mail :</label>
                <input type="email" name="email" placeholder="Tu E-mail" id="email" >
                
                <label for="password">password :</label>
                <input type="password" name="password"  placeholder="Tu password" id="password" >

            </fieldset>
            <input type="submit" value="Iniciar Sesion" class="boton boton-verde">  
        </form>
    </main>

<?php
   incluirTemplate('footer');
?>