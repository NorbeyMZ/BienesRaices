<?php

namespace App;
class Propiedad extends ActiveRecord{
    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id', 'titulo', 'precio', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'imagen', 'creado', 'vendedores_id'];

    public $id;
    public $titulo;
    public $precio;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $imagen;
    public $creado;
    public $vendedores_id;

    
    public function __construct($args=[])
    {
        $this->id=$args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedores_id  = $args['vendedores_id'] ?? 1;
       
    }

    public function validar(){
        if(!$this->titulo){
            self::$errores[] = "Debes añadir un titulo";
        }
        if(!$this->precio){
            self::$errores[] = "Debes añadir un precio";
        }
        if(strlen($this->descripcion) < 1){
            self::$errores[] = "La descripcion es obligatoria y debe tener al menos 1 caracteres";
        }
        if(!$this->habitaciones){
            self::$errores[] = "Debes añadir un numero de habitaciones";
        }
        if(!$this->wc){
            self::$errores[] = "Debes añadir un numero de baños";
        }
        if(!$this->estacionamiento){
            self::$errores[] = "Debes añadir un numero de estacionamientos";
        }
        if(!$this->vendedores_id){
            self::$errores[] = "Debes añadir un vendedor";
        }
        if(!$this->imagen){
            self::$errores[] = "La imagen del procducto es obligatoria";
        }
       
        return self::$errores;
    }

}