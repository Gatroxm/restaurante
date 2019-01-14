<pre><?php print_r($mesas) ?></pre>

<h1>Listado de Mesas</h1>
<table>
	<thead>
		<tr>
			<td>Serie</td>
			<td>Puestos</td>
			<td>Posición</td>
			<td>Creado</td>
			<th>Responsable</th>
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($mesas as $mesa): ?>	
			<tr>
				<td><?php echo $mesa['Mesa']['serie'] ?></td>
				<td><?php echo $mesa['Mesa']['puestos'] ?></td>
				<td><?php echo $mesa['Mesa']['posicion'] ?></td>
				<td><?php echo $this->Time->format('d-m-y; h:i A', $mesa['Mesa']['serie']) ?></td>
				<td><?php echo $this->Html->link($mesa['Mesero']['nombre'] .' '. $mesa['Mesero']['apellido'],array('conroller' => 'meseros', 'action' => 'ver', $mesa['Mesero']['id'])) ?></td>
				<td></td>
			</tr>		
		<?php endforeach; ?>
	</tbody>
</table>