<h2>Detalle del mesero@ <?php echo $mesero['Mesero']['nombre'] ?> <?php echo $mesero['Mesero']['apellido'] ?></h2>
<hr>
<p><strong>Cedula: </strong> <?php echo $mesero['Mesero']['doc'] ?></p>
<p><strong>Teléfono: </strong> <?php echo $mesero['Mesero']['telefono'] ?></p>
<p><strong>Fecha de creación: </strong> <?php echo $this->Time->format('d-m-y; h:i A', $mesero['Mesero']['created'])  ?></p>
<p><strong>Fecha de la ultima modificación: </strong> <?php echo $this->Time->format('d-m-y; h:i A', $mesero['Mesero']['modified']); ?></p>

<?php echo $this->Html->link('Atras', array('controller' => 'meseros', 'action' =>'index')) ?>
