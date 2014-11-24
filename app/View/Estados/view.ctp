<div class="estados view">
<h2><?php echo __('Estado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['estado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado'), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado'), array('action' => 'delete', $estado['Estado']['id']), null, __('Are you sure you want to delete # %s?', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lugar Nacimientos'), array('controller' => 'lugar_nacimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lugar Nacimiento'), array('controller' => 'lugar_nacimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lugar Residencias'), array('controller' => 'lugar_residencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lugar Residencia'), array('controller' => 'lugar_residencias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Lugar Nacimientos'); ?></h3>
	<?php if (!empty($estado['LugarNacimiento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Municipio'); ?></th>
		<th><?php echo __('Parroquia'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['LugarNacimiento'] as $lugarNacimiento): ?>
		<tr>
			<td><?php echo $lugarNacimiento['id']; ?></td>
			<td><?php echo $lugarNacimiento['estado_id']; ?></td>
			<td><?php echo $lugarNacimiento['municipio']; ?></td>
			<td><?php echo $lugarNacimiento['parroquia']; ?></td>
			<td><?php echo $lugarNacimiento['ciudad']; ?></td>
			<td><?php echo $lugarNacimiento['alumno_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lugar_nacimientos', 'action' => 'view', $lugarNacimiento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lugar_nacimientos', 'action' => 'edit', $lugarNacimiento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lugar_nacimientos', 'action' => 'delete', $lugarNacimiento['id']), null, __('Are you sure you want to delete # %s?', $lugarNacimiento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lugar Nacimiento'), array('controller' => 'lugar_nacimientos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lugar Residencias'); ?></h3>
	<?php if (!empty($estado['LugarResidencia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Municipio'); ?></th>
		<th><?php echo __('Parroquia'); ?></th>
		<th><?php echo __('Ciudad'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estado['LugarResidencia'] as $lugarResidencia): ?>
		<tr>
			<td><?php echo $lugarResidencia['id']; ?></td>
			<td><?php echo $lugarResidencia['estado_id']; ?></td>
			<td><?php echo $lugarResidencia['municipio']; ?></td>
			<td><?php echo $lugarResidencia['parroquia']; ?></td>
			<td><?php echo $lugarResidencia['ciudad']; ?></td>
			<td><?php echo $lugarResidencia['direccion']; ?></td>
			<td><?php echo $lugarResidencia['alumno_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'lugar_residencias', 'action' => 'view', $lugarResidencia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'lugar_residencias', 'action' => 'edit', $lugarResidencia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'lugar_residencias', 'action' => 'delete', $lugarResidencia['id']), null, __('Are you sure you want to delete # %s?', $lugarResidencia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Lugar Residencia'), array('controller' => 'lugar_residencias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
