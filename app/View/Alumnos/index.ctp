<div class="alumnos index">
	<h2><?php echo __('Alumnos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nac'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alumnos as $alumno): ?>
	<tr>
		<td><?php echo h($alumno['Alumno']['id']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['fecha_nac']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['created']); ?>&nbsp;</td>
		<td><?php echo h($alumno['Alumno']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alumno['Alumno']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alumno['Alumno']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alumno['Alumno']['id']), array(), __('Are you sure you want to delete # %s?', $alumno['Alumno']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Alumno'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dato Padres'), array('controller' => 'dato_padres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dato Padre'), array('controller' => 'dato_padres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dato Representantes'), array('controller' => 'dato_representantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dato Representante'), array('controller' => 'dato_representantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lugar Nacimientos'), array('controller' => 'lugar_nacimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lugar Nacimiento'), array('controller' => 'lugar_nacimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lugar Residencias'), array('controller' => 'lugar_residencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lugar Residencia'), array('controller' => 'lugar_residencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
