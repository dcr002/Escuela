<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title">Grados</div>
            </div>
            <div class="bootstrap-admin-panel-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Período Escolar</th>
                            <th>Grado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($grados as $grado): ?>
                            <tr>
                                    <td><?php echo h($periodos[$grado['Grado']['periodo_academico_id']]); ?>&nbsp;</td>
                                    <td><?php echo h($grado['Grado']['grado']); ?>&nbsp;</td>
                                    <td class="actions">
                                            <?php //echo $this->Html->link(__('Ver'), array('action' => 'view', $estado['Estado']['id'])); ?>
                                            <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $grado['Grado']['id'])); ?>
                                            <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $grado['Grado']['id']), array(), __('Desea eliminar el grado seleccionado # %s?', $grado['Grado']['grado'])); ?>
                                    </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>