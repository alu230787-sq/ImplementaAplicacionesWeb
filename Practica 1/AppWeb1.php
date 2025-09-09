<?php
//Programa para imprimir mensaje de Bienvenida
//Creado por Angela Jennifer Lira Sandate
//Fecha:09/Septiembre/2025
//appweb1.php
class texto
{
    public $texto1="Bienvenidos a programacion de app web";
    public function imprimirtexto()
    {
        echo $this->texto1."<br>";
        print $this->texto1;
    }
}
$obj1=new texto;
$obj1->imprimirtexto();
?>