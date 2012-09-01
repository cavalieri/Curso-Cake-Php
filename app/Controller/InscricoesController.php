<?php
App::uses('AppController', 'Controller');

class InscricoesController extends AppController{
	
	public $uses = array('Inscricao');
	
	public function inscrever(){
	
	/*	if($this->request->is('post')){
		
			
			if($this->Inscricao->save($this->request->data)){
				
				$this->redirect(array('controller'=> 'pages', 'action'=>'display','confirmacao'));
				
			}
		}*/
	
	
	}
	
}
?>