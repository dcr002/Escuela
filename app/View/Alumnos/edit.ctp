<div class="alumnos form">
<?php echo $this->Form->create('Alumno'); ?>
	<fieldset>
		<legend><?php echo __('Edit Alumno'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('cedula');
		echo $this->Form->input('sexo');
		echo $this->Form->input('fecha_nac');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Alumno.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Alumno.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('action' => 'index')); ?></li>
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
