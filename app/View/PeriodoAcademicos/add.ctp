<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default bootstrap-admin-no-table-panel">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title">Módulo Registro de Períodos Academicos</div>
            </div>
            <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">

                <?php echo $this->Form->create('PeriodoAcademico', array('class'=>'form-horizontal'))?>
                    <fieldset>
                        <legend>Período Escolar</legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Período</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('periodo', array('label'=>false, 'div'=>false, 'class'=>'form-control', 'readonly'=>'readonly', 'value'=>(date('Y').'-'.(date('Y')+1))));?>
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