<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default bootstrap-admin-no-table-panel">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title">Módulo Registro de Estados</div>
            </div>
            <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">

                <?php echo $this->Form->create('Estado', array('class'=>'form-horizontal'))?>
                    <fieldset>
                        <legend>Estados</legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Estado</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('id');?>
                                <?php echo $this->Form->input('estado', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <button type="reset" class="btn btn-default">Cancelar</button>
                    </fieldset>
                <?php echo $this->Form->end()?>
            </div>
        </div>
    </div>
</div>