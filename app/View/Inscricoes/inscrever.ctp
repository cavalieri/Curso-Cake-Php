<h3 align="center">Inscrições</h3>
<hr>
<p align="center">
<div id ="main">
	<?php echo $this->Form->create('Inscricao');
		 echo $this->Form->input('nome', array('label'=>'Nome','class'=>'grid')) ;
		 echo $this->Form->input('email', array('label'=>'Email','class'=>'grid')) ;
		 echo $this->Form->input('telefone', array('label'=>'Fone','class'=>'grid')) ;
		 echo $this->Form->input('endereco', array('label'=>'Endereço','class'=>'grid'))  ;
		 echo $this->Form->submit('Inscrever') ;
		 echo $this->Form->end() 
	 ?>
</div>
</p>