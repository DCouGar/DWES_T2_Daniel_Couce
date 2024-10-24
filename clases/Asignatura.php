<?php

namespace clases;

class Asignatura{

    private $id;

    private $nombre;

    private $creditos;


    function __construct($id, $nombre, $creditos)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->creditos=$creditos;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCreditos()
    {
        return $this->creditos;
    }

    public function setCreditos($creditos)
    {
        $this->creditos = $creditos;

        return $this;
    }

    public static function crearAsignaturasDeMuestra(){
        $asignaturasDeMuestra = [];
        $asignatura1 = new Asignatura(1, 'DWES', '7 créditos');
        $asignaturasDeMuestra[] = $asignatura1;
        $asignatura2 = new Asignatura(2, 'DWEC', '6 créditos');
        $asignaturasDeMuestra[] = $asignatura2;
        $asignatura3 = new Asignatura(3, 'DIW', '4 créditos');
        $asignaturasDeMuestra[] = $asignatura3;
        $asignatura4 = new Asignatura(4, 'DAW', '4 créditos');
        $asignaturasDeMuestra[] = $asignatura4;
        return $asignaturasDeMuestra;
    }
}
?>