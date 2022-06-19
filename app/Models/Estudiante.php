<?php

namespace App\Models;

class Estudiante{

    private $nombres;

    private $codigo;

    public function __construct($nombres, $codigo){

        $this->nombres = $nombres;

        $this->codigo = $codigo;
        
    }

    public function getNombres(){

        return $this->nombres;
    }

    public function getCodigo(){

        return $this->codigo;
    }
 
}