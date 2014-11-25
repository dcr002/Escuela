<div class="grados view">
<h2><?php echo __('Grado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($grado['Grado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grado'); ?></dt>
		<dd>
			<?php echo h($grado['Grado']['grado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo Academico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($grado['PeriodoAcademico']['id'], array('controller' => 'periodo_academicos', 'action' => 'view', $grado['PeriodoAcademico']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grado'), array('action' => 'edit', $grado['Grado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grado'), array('action' => 'delete', $grado['Grado']['id']), null, __('Are you sure you want to delete # %s?', $grado['Grado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodo Academicos'), array('controller' => 'periodo_academicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo Academico'), array('controller' => 'periodo_academicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('controller' => 'seccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Seccions'); ?></h3>
	<?php if (!empty($grado['Seccion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Seccion'); ?></th>
		<th><?php echo __('Grado Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grado['Seccion'] as $seccion): ?>
		<tr>
			<td><?php echo $seccion['id']; ?></td>
			<td><?php echo $seccion['seccion']; ?></td>
			<td><?php echo $seccion['grado_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'seccions', 'action' => 'view', $seccion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'seccions', 'action' => 'edit', $seccion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'seccions', 'action' => 'delete', $seccion['id']), null, __('Are you sure you want to delete # %s?', $seccion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
