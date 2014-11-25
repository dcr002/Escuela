<div class="periodoAcademicos view">
<h2><?php echo __('Periodo Academico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($periodoAcademico['PeriodoAcademico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo'); ?></dt>
		<dd>
			<?php echo h($periodoAcademico['PeriodoAcademico']['periodo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($periodoAcademico['PeriodoAcademico']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Periodo Academico'), array('action' => 'edit', $periodoAcademico['PeriodoAcademico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Periodo Academico'), array('action' => 'delete', $periodoAcademico['PeriodoAcademico']['id']), null, __('Are you sure you want to delete # %s?', $periodoAcademico['PeriodoAcademico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodo Academicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo Academico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grados'), array('controller' => 'grados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grado'), array('controller' => 'grados', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Grados'); ?></h3>
	<?php if (!empty($periodoAcademico['Grado'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grado'); ?></th>
		<th><?php echo __('Periodo Academico Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($periodoAcademico['Grado'] as $grado): ?>
		<tr>
			<td><?php echo $grado['id']; ?></td>
			<td><?php echo $grado['grado']; ?></td>
			<td><?php echo $grado['periodo_academico_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grados', 'action' => 'view', $grado['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grados', 'action' => 'edit', $grado['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grados', 'action' => 'delete', $grado['id']), null, __('Are you sure you want to delete # %s?', $grado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grado'), array('controller' => 'grados', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
