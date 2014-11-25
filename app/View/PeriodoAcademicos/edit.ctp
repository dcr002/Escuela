<div class="periodoAcademicos form">
<?php echo $this->Form->create('PeriodoAcademico'); ?>
	<fieldset>
		<legend><?php echo __('Edit Periodo Academico'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('periodo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PeriodoAcademico.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PeriodoAcademico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Periodo Academicos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grados'), array('controller' => 'grados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grado'), array('controller' => 'grados', 'action' => 'add')); ?> </li>
	</ul>
</div>
