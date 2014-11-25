<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default bootstrap-admin-no-table-panel">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title">Módulo Registro de Grados</div>
            </div>
            <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">

                <?php echo $this->Form->create('Grado', array('class'=>'form-horizontal'))?>
                    <fieldset>
                        <legend>Grados</legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Grado</label>
                            <div class="col-lg-9">
                                <?php echo $this->Form->input('id'); ?>
                                <?php echo $this->Form->input(
                                        'grado', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array(
                                                'Primer Grado'=>'Primer Grado',
                                                'Segundo Grado'=>'Segundo Grado',
                                                'Tercero Grado'=>'Tercero Grado',
                                                'Cuarto Grado'=>'Cuarto Grado',
                                                'Quinto Grado'=>'Quinto Grado',
                                                'Sexto Grado'=>'Sexto Grado',
                                            ),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-3 control-label" for="select01">Periodo Academico</label>
                            <div class="col-lg-9">
                                <?php echo $this->Form->input(
                                        'periodo_academico_id', 
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
