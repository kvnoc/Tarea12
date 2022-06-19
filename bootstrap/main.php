<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Models\{Estudiante,Matricula,Curso};

$matricula = new Matricula();

$matricula->setNumero(001);
$matricula->agregar(new Estudiante('Jose Lopez Salas', 202014587));
$matricula->agregar2(new Curso('Base de Datos'));
$matricula->agregar2(new Curso('Programacion Orientada a Objetos'));

echo "Matricula Nro: ".$matricula->getNumero()."\n";

foreach($matricula->mostrar() as $estudiante){

    echo "Estudiante: ".$estudiante->getNombres()."\n";
    echo "Codigo: ".$estudiante->getCodigo()."\n";

}

foreach($matricula->mostrar2() as $curso){

    echo "Curso: ".$curso->getNombres()."\n";
}

