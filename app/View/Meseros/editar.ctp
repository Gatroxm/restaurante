<h2>Editar Mesero</h2>

<?php 
	
	echo $this->Form->create('Mesero');

	echo $this->Form->input('doc');
	echo $this->Form->input('nombre');
	echo $this->Form->input('apellido');
	echo $this->Form->input('telefono');
	echo $this->Form->end('Editar Mesero');

	
 ?>
  <?php echo $this->Html->link('Atras', array('controller' => 'meseros', 'action' =>'index')) ?>