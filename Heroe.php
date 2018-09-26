<?php

include GrupoHeroes . php;
class Heroe/*extends GrupoHeroes*/
{
    public $nombre;
    public $fecha;
    public $poderes;
    public $bio;
    public $universo;

    public function __construct($nombre, $fecha, $poderes, $bio, $nombreGrupo/*, $universo*/)
    {
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->poderes = $poderes;
        $this->bio = $bio;
        // $this->universo = $universo;
        $this->nombreGrupo = $nombreGrupo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function ComprobarUniverso()
    {
        switch ($nombreGrupo) {
            case "dc":
                return "dc.png";
                break;

            case "marvel":
                return "marvel.jpg";
                break;

            default:
                return "default.png";
                break;
        }
    }

}
