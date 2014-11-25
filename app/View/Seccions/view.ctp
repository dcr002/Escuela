<div class="seccions view">
<h2><?php echo __('Seccion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seccion['Seccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccion'); ?></dt>
		<dd>
			<?php echo h($seccion['Seccion']['seccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($seccion['Grado']['id'], array('controller' => 'grados', 'action' => 'view', $seccion['Grado']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seccion'), array('action' => 'edit', $seccion['Seccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seccion'), array('action' => 'delete', $seccion['Seccion']['id']), null, __('Are you sure you want to delete # %s?', $seccion['Seccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grados'), array('controller' => 'grados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grado'), array('controller' => 'grados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matriculas'), array('controller' => 'matriculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matricula'), array('controller' => 'matriculas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Matriculas'); ?></h3>
	<?php if (!empty($seccion['Matricula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('IsActive'); ?></th>
		<th><?php echo __('IsDelete'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th><?php echo __('Periodo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seccion['Matricula'] as $matricula): ?>
		<tr>
			<td><?php echo $matricula['id']; ?></td>
			<td><?php echo $matricula['created']; ?></td>
			<td><?php echo $matricula['isActive']; ?></td>
			<td><?php echo $matricula['isDelete']; ?></td>
			<td><?php echo $matricula['observaciones']; ?></td>
			<td><?php echo $matricula['alumno_id']; ?></td>
			<td><?php echo $matricula['seccion_id']; ?></td>
			<td><?php echo $matricula['periodo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'matriculas', 'action' => 'view', $matricula['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'matriculas', 'action' => 'edit', $matricula['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'matriculas', 'action' => 'delete', $matricula['id']), null, __('Are you sure you want to delete # %s?', $matricula['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Matricula'), array('controller' => 'matriculas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
