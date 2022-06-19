<?php

namespace App\Models;

use App\Models\Estudiante;
use App\Models\Curso;

class Matricula{

    private $arreglo;

    private $arreglo2;

    private $numero;


    public function __construct(){

        $this->arreglo = [];

        $this->arreglo2 = [];

    }

    public function setNumero($numero){

        $this->numero = $numero;
    }

    public function getNumero(){

        return $this->numero;
    }

    public function agregar(Estudiante $estudiante){

        $this->arreglo[] = $estudiante;

    }

    public function mostrar(){

        return $this->arreglo;

    }

    public function agregar2(Curso $curso){

        $this->arreglo2[] = $curso;

    }

    public function mostrar2(){

        return $this->arreglo2;

    }


}