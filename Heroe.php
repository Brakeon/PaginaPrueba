<?php 

Class Heroe{
    var $nombre;
    var $fecha;
    var $poderes;
    var $bio;
    var $universo;

    function __construct($nombre, $fecha, $poderes, $bio, $universo)
        {
            $this->$nombre = $nombre;
            $this->$fecha = $fecha;
            $this->$poderes = $poderes;
            $this->$bio = $bio;
            $this->$universo = $universo;
        }

    function ComprobarUniverso(){
        switch($universo){
            case 'dc':
            break;

            case 'marvel':
            break;

            default:
            break;
        }
    }

    
}

?>