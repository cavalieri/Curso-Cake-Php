<?php
App::uses('AppModel','Model');
/**
 * User Model
 *
 */
class Inscricao extends AppModel{
	var $name = 'Inscricao';	
	public $useTable = 'inscricoes';		
	public $displayField = 'nome';	
	public $order = array('nome' => 'ASC');		
	}
?>
