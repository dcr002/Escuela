
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title">Estados</div>
            </div>
            <div class="bootstrap-admin-panel-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Cédula</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Género</th>
                            <th>Registrado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($alumnos as $alumno): ?>
                            <tr>
                                    <td><?php echo h($alumno['Alumno']['cedula']); ?>&nbsp;</td>
                                    <td><?php echo h($alumno['Alumno']['nombres']); ?>&nbsp;</td>
                                    <td><?php echo h($alumno['Alumno']['apellidos']); ?>&nbsp;</td>
                                    <td><?php echo h($alumno['Alumno']['sexo']); ?>&nbsp;</td>
                                    <td><?php echo h($alumno['Alumno']['created']); ?>&nbsp;</td>
                                    <td class="actions">
                                            <?php //echo $this->Html->link(__('Ver'), array('action' => 'view', $estado['Estado']['id'])); ?>
                                            <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $alumno['Alumno']['id'])); ?>
                                            <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $alumno['Alumno']['id']), array(), __('Desea eliminar el Alumnos Registrado bajo el Número de Cédula # %s?', $alumno['Alumno']['cedula'])); ?>
                                    </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>