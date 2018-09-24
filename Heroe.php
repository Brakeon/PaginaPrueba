<?php

class Heroe
{
    public $nombre;
    public $fecha;
    public $poderes;
    public $bio;
    public $universo;

    public function __construct($nombre, $fecha, $poderes, $bio, $universo)
    {
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->poderes = $poderes;
        $this->bio = $bio;
        $this->universo = $universo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function ComprobarUniverso()
    {
        switch ($universo) {
            case 'dc':
                break;

            case 'marvel':
                break;

            default:
                break;
        }
    }

}
