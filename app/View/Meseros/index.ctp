<h2>Listado de Meseros</h2>

<table>
	<thead>
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Teléfono</td>
			<td>Cedula</td>
			<td>Acciones</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($meseros as $mesero):?>
			<tr>
				<td><?php echo $mesero['Mesero']['id'] ?> </td>
				<td><?php echo $mesero['Mesero']['nombre'] ?></td>
				<td><?php echo $mesero['Mesero']['apellido'] ?></td>
				<td><?php echo $mesero['Mesero']['telefono'] ?></td>
				<td><?php echo $mesero['Mesero']['doc'] ?></td>
				<td><?php echo $this->Html->link('Detalle', array('controller' => 'meseros', 'action' => 'ver', $mesero['Mesero']['id'])) ?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>