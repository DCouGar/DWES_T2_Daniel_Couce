<?php

namespace clases;

class Profesor extends Miembro{

    private bool $titular;

    private $asignatura;

    function __construct($id, $nombre, $apellidos, $email)
    {
        parent::__construct($id,$nombre,$apellidos,$email);
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }


    public function getAsignatura()
    {
        return $this->asignatura;
    }

    public function setAsignatura($asignatura)
    {
        $this->asignatura = $asignatura;

        return $this;
    }

    function crearProfesoresDeMuestra(){
        $profesores = [];
 
        $p1 = new Profesor(1, "Steve", "Wozniak", "steve@apple.com", "DWES");
        $profesores[] = $p1;
       
        $p2 = new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", "DIW");
        $profesores[] = $p2;
       
        $p3 = new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", "DWEC");
        $profesores[] = $p3;
       
        $p4 = new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW");
        $profesores[] = $p4;
       
        return $profesores;
    }
}
