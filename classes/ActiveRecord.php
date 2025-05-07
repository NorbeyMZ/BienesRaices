<?php

namespace App;
class ActiveRecord{
    
    //base de datos
     
    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla = '';

    //errores
    protected static $errores = []; 
    

    //definir la conexion a la base de datos
    public static function setDB($dataBase){
        self::$db = $dataBase;
    }


    public function guardar() {
        if(!is_null($this->id)) {
            // actualizar
            $this->actualizar();
        } else {
            // Creando un nuevo registro
            $this->crear();
        }
    }
    public function crear(){
        
        //sanitizar los datos
        $atributos= $this->sanitizarDatos();
        
        $query = "INSERT INTO " . static::$tabla . " (";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' "; 
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";

        // Resultado de la consulta
        $resultado = self::$db->query($query);

        // Mensaje de exito
        if($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=1');
        }
    }

    public function actualizar(){
      
        //sanitizar los datos
        $atributos = $this->sanitizarDatos();

        $valores = [];
        foreach($atributos as $key => $value) {
            $valores[] = "{$key}='{$value}'";
        }

        $query = "UPDATE " . static::$tabla . " SET ";
        $query .=  join(', ', $valores );
        $query .= " WHERE id = '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1 "; 

        $resultado = self::$db->query($query);

        if($resultado) {
            // Redireccionar al usuario.
            header('Location: /admin?resultado=2');
        }
    }

    public function eliminar(){
        //eliminar la propiedad 
        $query = "DELETE FROM " . static::$tabla . " WHERE id=".self::$db->escape_string($this->id) . " LIMIT 1";
        $resultado= self::$db->query($query);
        if($resultado){
            $this->borrarImagen();
            header('location: /admin?resultado=3'); 
        }
    }

    //identificar y unir los atributos de la base de datos
    public function atributos(){
        $atributos = [];
        foreach (static::$columnasDB as $columna) {
            if($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizarDatos(){
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach ($atributos as $key => $value) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado; 
    }
    
    //validacion
    public static function getErrores(){
        return static::$errores;
    }

    public function validar(){
        static::$errores= [];
        return static::$errores;
    }

    //subida de archivos
    public function setImagen($imagen){

        //eliminar la imagen previa
        if(!is_null($this->id)){
            $this->borrarImagen();
        }
        if($imagen){
            $this->imagen = $imagen;
        }
    }  
        //eliminar archivo

    public function borrarImagen(){
        $existeArchivo = file_exists(CARPETA_IMAGENES . $this->imagen);

        if($existeArchivo){
            unlink(CARPETA_IMAGENES . $this->imagen);
        }
    }


    //listar todas las $tabla "
    public static function all(){
        $query = "SELECT * FROM ". static::$tabla;
        $resultado = self::consultarSQL($query);
        return $resultado;
      
    }
    //busca una propiedad por su id
    public static function find($id) {
        $query = "SELECT * FROM " . static::$tabla . "  WHERE id = ${id}";

        $resultado = self::consultarSQL($query);

        return array_shift( $resultado ) ;
    }


    public static function consultarSQL($query){
        //consultar la base de datos    
        $resultado = self::$db->query($query);
        //iterar los resultados 
        $array = [];
        while($registro = $resultado->fetch_assoc()){
             
            $array[] = static::crearObjeto($registro);
        }

        //liberar la memoria
        $resultado->free();
        //retornar los resultados
        return $array;

    }
    protected static function crearObjeto($registro){
       $objeto = new static;

         foreach ($registro as $key => $value) {
              if(property_exists($objeto, $key)){
                $objeto->$key = $value;
              }
         }
       
        return $objeto;
      
    }

    //sinconizar el objeto en memoria con los datos de la base de datos
    public function sincronizar($args=[]) { 
        foreach($args as $key => $value) {
          if(property_exists($this, $key) && !is_null($value)) {
            $this->$key = $value;
          }
        }
    }
}