<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ProdutoController extends AppController{


 public function index(){

//$produtos->paginate($this->Produtos);
//$this->set(compact('produtos'));
//$this->set('_serialize', ['produtos']);
 }
    

function cadastrar(){

$articles = TableRegistry::get('Produtos');

$prod = $articles->newEntity();

if(!empty ($this->request->data)){

$prod->nome = $this->request->data["nome"];
$prod->codigo = $this->request->data["codigo"];
$prod->valor = $this->request->data["valor"];

if($articles->save($prod)){
	$this->redirect(array('action' => 'teste'));
}
}

}



function apresentar(){

$articles = TableRegistry::get('produtos');
$query = $articles->find();
echo"<h1>Produtos Cadastrados </h1>";

foreach ($query as $row) {
	echo "<br>";
	echo "ID: ". $row->id."<br>";
    echo "Nome: ". $row->nome."<br>";
    echo "Código: ".$row->codigo."<br>";
    echo "Valor Unitario ".$row->valor."<br>";

   
  

}
   exit();
}

function excluir($ide){
	$articles = TableRegistry::get('Produtos');

$query = $articles->find();

foreach ($query as $row) {
if ($row->id == $ide) {
	
	  $articles->delete($row);
	    echo "Produto Deletado!";
 $this->redirect(array('action' => 'teste'));
}else{

}

   }
}

function atualizar($id){
	$articles = TableRegistry::get('produtos');
	$prod = $articles->find();



	foreach ($prod as $row) {

		if ($row->id == $id) {



			$i = $row->id;
			$n = $row->nome;
			$c = $row->codigo;
			$v = $row->valor;
			$this->set("i", $i);
			$this->set("n", $n);
			$this->set("c", $c);
			$this->set("v", $v);
			$this->render('atualizar');	

		
	

		if(!empty ($this->request->data)){
			$id = $row->id;
    		$row->nome = $this->request->data["nome"];
			$row->codigo = $this->request->data["codigo"];
			$row->valor = $this->request->data["valor"];
			if($articles->save($row)){
	 		$this->redirect(array('action' => 'teste'));
				}
			}
   		}
	}

}

function excluirTodos(){
	$articles = TableRegistry::get('Produtos');

	$query = $articles->find();

		foreach ($query as $row) {

	
			$articles->delete($row);
	 		$this->redirect(array('action' => 'teste'));


   }
  
}

function teste(){

	$articles = TableRegistry::get('Produtos');

	$query = $articles->find();

	
	
	$this->set("query", $query);
	


}

function cadastrarJson(){

	$data = $this->request->input('json_decode');

	$articles = TableRegistry::get('Produtos');

	$prod = $articles->newEntity();

if(!empty ($this->request->data)){

$prod->nome = $this->request->data["nome"];
$prod->codigo = $this->request->data["codigo"];
$prod->valor = $this->request->data["valor"];

if($articles->save($prod)){
	$this->redirect(array('action' => 'teste'));
}
}
}

function exemplo(){
	
	$res = array();
	$produtos = $this->Produtos->newEntity();
	if ($this->request->is('post')) {
	 	$produtos= $this->Produtos->patchEntity($produtos,  $this->request->data);
	 	$res['status'] = 1;
	 	$res['msg'] = "Deu Certo";

	 } else{
	 	$res['status'] = 0;

	 	$res['msg'] = "Deu Errado";
	 }
	 $this->set(compact('res'));
	 $this->set('_serialize', ['res']);

}

function cadastrarJ(){
	$articles = TableRegistry::get('Produtos');

	$prod = $articles->newEntity();
if ($this->request->is('post')) {
	if(!empty ($this->request->data)){

		$prod->nome = $this->request->data["nome"];
		$prod->codigo = $this->request->data["codigo"];
		$prod->valor = $this->request->data["valor"];

	if($articles->save($prod)){
		$this->redirect(array('action' => 'teste'));
		}
	}
}
}

function listar(){

 		

$articles = TableRegistry::get('produtos');
$query = $articles->find();


foreach ($query as $row) {

$res[] = $row;
   
  

}
	
echo json_encode($res);
$this->set(compact('res'));
$this->set('_serialize', ['res']);
exit();
}


function excluirTodosJson(){
	$articles = TableRegistry::get('Produtos');

	$query = $articles->find();

	foreach ($query as $row) {
	
		$articles->delete($row);
	


   }
  
}



function excluirJson(){

	$articles = TableRegistry::get('Produtos');
	$query = $articles->find();
	if ($this->request->is('post')) {
		if(!empty ($this->request->data)){

		foreach ($query as $row) {
			if ($row->id == $this->request->data["id"]) {
	
	  		$articles->delete($row);
		}	
		}
	}



}

}
}

