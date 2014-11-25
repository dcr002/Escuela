<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title">Secciones</div>
            </div>
            <div class="bootstrap-admin-panel-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Grado</th>
                            <th>Sección</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($seccions as $seccion): ?>
                            <tr>
                                <td><?php echo h($seccion['Grado']['grado']); ?></td>
                                <td><?php echo h($seccion['Seccion']['seccion']); ?>&nbsp;</td>
                                <td class="actions">
                                        <?php //echo $this->Html->link(__('Ver'), array('action' => 'view', $estado['Estado']['id'])); ?>
                                        <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $seccion['Seccion']['id'])); ?>
                                        <?php //echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $grado['Grado']['id']), array(), __('Desea eliminar el grado seleccionado # %s?', $grado['Grado']['grado'])); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>