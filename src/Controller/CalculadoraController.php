<?php


namespace App\Controller;

use App\Controller\AppController;

class CalculadoraController extends AppController{




public function somar(){

if(!empty ($this->request->data)){
$res = $this->request->data["valor1"] + $this->request->data["valor2"];

$ope = "A Soma foi = ";
$this->set("res", $res);
$this->set("ope", $ope);
$this->render('resultado');
} 


}

public function subtrair(){

if(!empty ($this->request->data)){
$res = $this->request->data["valor1"] - $this->request->data["valor2"];

$ope = "A Subtração foi = ";
$this->set("ope", $ope);
$this->set("res", $res);
$this->render('resultado');
} 


}

public function multiplicar(){

if(!empty ($this->request->data)){
$res = $this->request->data["valor1"] * $this->request->data["valor2"];

$ope = "A Multiplicação foi = ";
$this->set("ope", $ope);

$this->set("res", $res);
$this->render('resultado');
} 


}

public function dividir(){
if(!empty ($this->request->data)){


if(	$this->request->data["valor2"] == 0){
	$ope = "Impossivel Dividir Por: ";
	$res = 0;
$this->set("ope", $ope);

$this->set("res", $res);
$this->render('resultado');

}else{
	$res = $this->request->data["valor1"] / $this->request->data["valor2"];
$ope = "A Divisão foi = ";
$this->set("ope", $ope);

$this->set("res", $res);
$this->render('resultado');

}
}

}

}