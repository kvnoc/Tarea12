<?php

namespace App\Models;

class Curso{

    private $nombres;

    public function __construct($nombres){

        $this->nombres = $nombres;
        
    }

    public function getNombres(){

        return $this->nombres;
    }
}