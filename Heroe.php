<?php

include GrupoHeroes.php;
class Heroe extends GrupoHeroes
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
            return "dc";
                break;

            case 'marvel':
                return "marvel";
                break;

            default:
            return "default";
                break;
        }
    }

}
