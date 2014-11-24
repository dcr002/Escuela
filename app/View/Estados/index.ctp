
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
                            <th>#</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($estados as $estado): ?>
                            <tr>
                                    <td><?php echo h($estado['Estado']['id']); ?>&nbsp;</td>
                                    <td><?php echo h($estado['Estado']['estado']); ?>&nbsp;</td>
                                    <td class="actions">
                                            <?php //echo $this->Html->link(__('Ver'), array('action' => 'view', $estado['Estado']['id'])); ?>
                                            <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $estado['Estado']['id'])); ?>
                                            <?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $estado['Estado']['id']), array(), __('Desea eliminar el estado # %s?', $estado['Estado']['estado'])); ?>
                                    </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
