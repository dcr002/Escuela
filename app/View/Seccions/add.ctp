<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default bootstrap-admin-no-table-panel">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title">Módulo Registro de Secciones</div>
            </div>
            <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">

                <?php echo $this->Form->create('Seccion', array('class'=>'form-horizontal'))?>
                    <fieldset>
                        <legend>Sección</legend>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Sección</label>
                            <div class="col-lg-4">
                                <?php echo $this->Form->input('seccion', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Grado</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'grado_id', 
                                        array(
                                            'type'=>'select',
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
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

<script type="text/javascript">
    
    $(function() {
        $('.datepicker').datepicker();
        $('.uniform_on').uniform();
        $('.chzn-select').chosen();
        $('.selectize-select').selectize();
        $('.textarea-wysihtml5').wysihtml5({
            stylesheets: [
                'vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/wysiwyg-color.css'
            ]
        });
    });
</script>