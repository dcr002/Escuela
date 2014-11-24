<div class="alumnos view">
<h2><?php echo __('Alumno'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nac'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['fecha_nac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($alumno['Alumno']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alumno'), array('action' => 'edit', $alumno['Alumno']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alumno'), array('action' => 'delete', $alumno['Alumno']['id']), null, __('Are you sure you want to delete # %s?', $alumno['Alumno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Dato Padres'); ?></h3>
	<?php if (!empty($alumno['DatoPadre'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre Madre'); ?></th>
		<th><?php echo __('Cedula Madre'); ?></th>
		<th><?php echo __('Telf Madre'); ?></th>
		<th><?php echo __('Nombre Padre'); ?></th>
		<th><?php echo __('Cedula Padre'); ?></th>
		<th><?php echo __('Telf Padre'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alumno['DatoPadre'] as $datoPadre): ?>
		<tr>
			<td><?php echo $datoPadre['id']; ?></td>
			<td><?php echo $datoPadre['nombre_madre']; ?></td>
			<td><?php echo $datoPadre['cedula_madre']; ?></td>
			<td><?php echo $datoPadre['telf_madre']; ?></td>
			<td><?php echo $datoPadre['nombre_padre']; ?></td>
			<td><?php echo $datoPadre['cedula_padre']; ?></td>
			<td><?php echo $datoPadre['telf_padre']; ?></td>
			<td><?php echo $datoPadre['alumno_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dato_padres', 'action' => 'view', $datoPadre['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dato_padres', 'action' => 'edit', $datoPadre['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dato_padres', 'action' => 'delete', $datoPadre['id']), null, __('Are you sure you want to delete # %s?', $datoPadre['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dato Padre'), array('controller' => 'dato_padres', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Dato Representantes'); ?></h3>
	<?php if (!empty($alumno['DatoRepresentante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombres'); ?></th>
		<th><?php echo __('Apellidos'); ?></th>
		<th><?php echo __('Cedula'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Fecha Nac'); ?></th>
		<th><?php echo __('Lugar Nacimiento Id'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Estado Civil'); ?></th>
		<th><?php echo __('Grado Instruccion'); ?></th>
		<th><?php echo __('IsTrabaja'); ?></th>
		<th><?php echo __('Tipo Empleo'); ?></th>
		<th><?php echo __('Ingresos'); ?></th>
		<th><?php echo __('Parentesco'); ?></th>
		<th><?php echo __('Jefe Hogar'); ?></th>
		<th><?php echo __('IsJefeTrabaja'); ?></th>
		<th><?php echo __('Personas Aportan'); ?></th>
		<th><?php echo __('Total Ingresos'); ?></th>
		<th><?php echo __('Egreso Alimentacion'); ?></th>
		<th><?php echo __('Egreso Salud'); ?></th>
		<th><?php echo __('Egreso Servicios'); ?></th>
		<th><?php echo __('Egreso Otros'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($alumno['DatoRepresentante'] as $datoRepresentante): ?>
		<tr>
			<td><?php echo $datoRepresentante['id']; ?></td>
			<td><?php echo $datoRepresentante['nombres']; ?></td>
			<td><?php echo $datoRepresentante['apellidos']; ?></td>
			<td><?php echo $datoRepresentante['cedula']; ?></td>
			<td><?php echo $datoRepresentante['sexo']; ?></td>
			<td><?php echo $datoRepresentante['fecha_nac']; ?></td>
			<td><?php echo $datoRepresentante['lugar_nacimiento_id']; ?></td>
			<td><?php echo $datoRepresentante['telefono']; ?></td>
			<td><?php echo $datoRepresentante['estado_civil']; ?></td>
			<td><?php echo $datoRepresentante['grado_instruccion']; ?></td>
			<td><?php echo $datoRepresentante['isTrabaja']; ?></td>
			<td><?php echo $datoRepresentante['tipo_empleo']; ?></td>
			<td><?php echo $datoRepresentante['ingresos']; ?></td>
			<td><?php echo $datoRepresentante['parentesco']; ?></td>
			<td><?php echo $datoRepresentante['jefe_hogar']; ?></td>
			<td><?php echo $datoRepresentante['isJefeTrabaja']; ?></td>
			<td><?php echo $datoRepresentante['personas_aportan']; ?></td>
			<td><?php echo $datoRepresentante['total_ingresos']; ?></td>
			<td><?php echo $datoRepresentante['egreso_alimentacion']; ?></td>
			<td><?php echo $datoRepresentante['egreso_salud']; ?></td>
			<td><?php echo $datoRepresentante['egreso_servicios']; ?></td>
			<td><?php echo $datoRepresentante['egreso_otros']; ?></td>
			<td><?php echo $datoRepresentante['alumno_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dato_representantes', 'action' => 'view', $datoRepresentante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dato_representantes', 'action' => 'edit', $datoRepresentante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dato_representantes', 'action' => 'delete', $datoRepresentante['id']), null, __('Are you sure you want to delete # %s?', $datoRepresentante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dato Representante'), array('controller' => 'dato_representantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Lugar Nacimientos'); ?></h3>
	<?php if (!empty($alumno['LugarNacimiento'])): ?>
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
	<?php foreach ($alumno['LugarNacimiento'] as $lugarNacimiento): ?>
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
	<?php if (!empty($alumno['LugarResidencia'])): ?>
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
	<?php foreach ($alumno['LugarResidencia'] as $lugarResidencia): ?>
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
