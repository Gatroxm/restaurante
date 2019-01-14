<h2>Detalle del mesero@ <?php echo $mesero['Mesero']['nombre'] ?> <?php echo $mesero['Mesero']['apellido'] ?></h2>
<hr>
<p><strong>Cedula: </strong> <?php echo $mesero['Mesero']['doc'] ?></p>
<p><strong>Teléfono: </strong> <?php echo $mesero['Mesero']['telefono'] ?></p>
<p><strong>Fecha de creación: </strong> <?php echo $this->Time->format('d-m-y; h:i A', $mesero['Mesero']['created'])  ?></p>
<p><strong>Fecha de la ultima modificación: </strong> <?php echo $this->Time->format('d-m-y; h:i A', $mesero['Mesero']['modified']); ?></p>

<br>


 <h3>Encargado de las mesas:</h3>
 <hr>

<?php if (empty($mesero['Mesa'])): ?>
	<p>Este mesero no tiene mesas asociadas</p> 	
<?php else: ?>
	<?php foreach ($mesero['Mesa'] as $mesa) :?>
		<p>Serie: <?php echo $mesa['serie'] ?></p>
		<p>Puestos: <?php echo $mesa['puestos'] ?></p>
		<p>Posición: <?php echo $mesa['posicion'] ?></p>
		<br> <hr>
	<?php endforeach; ?>
<?php endif; ?>

<?php echo $this->Html->link('Atras', array('controller' => 'meseros', 'action' =>'index')) ?>