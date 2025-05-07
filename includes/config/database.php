<?php

function conectarDB() : mysqli{
    $db = new mysqli("localhost","root","root","bienesraices_crud");
    $db->set_charset('utf8');
    if(!$db) {
        //echo"no se pudo conecto a la base de datos";
        exit;//detiene la ejecion del codigo
    }
    //echo"se coencto";
    return $db;

}