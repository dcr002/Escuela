<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default bootstrap-admin-no-table-panel">
            <div class="panel-heading">
                <div class="text-muted bootstrap-admin-box-title">Módulo Registro de Alumnos</div>
            </div>
            <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">

                <?php echo $this->Form->create('Alumnos', array('class'=>'form-horizontal', 'novalidate'=>'novalidate'))?>
                    <fieldset>
                        <legend>Datos Personales</legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Nombres</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('Alumno.nombres', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Apellidos</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('Alumno.apellidos', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Cédula</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('Alumno.cedula', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Género</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'Alumno.sexo', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Femenino'=>'Femenino', 'Masculino'=>'Masculino'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Fecha Nacimiento</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('Alumno.fecha_nac', array('type'=>'text','label'=>false, 'div'=>false, 'class'=>'form-control datepicker'));?>
                            </div>
                        </div>

                    </fieldset>
                
                    <fieldset>
                        <legend>Padres</legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Nombre Madre</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoPadre.0.nombre_madre', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Cédula Madre</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoPadre.0.cedula_madre', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Teléfono Madre</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoPadre.0.telf_madre', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Nombre Padre</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoPadre.0.nombre_padre', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Cédul Padre</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoPadre.0.cedula_padre', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Teléfono Padre</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoPadre.0.telf_padre', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                    </fieldset>
                
                    <fieldset>
                        <legend>Representante</legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Nombres</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.nombres', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Apellidos</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.apellidos', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Cédula</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.cedula', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Género</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.sexo', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Femenino'=>'Femenino', 'Masculino'=>'Masculino'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Fecha Nacimiento</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.fecha_nac', array('type'=>'text','label'=>false, 'div'=>false, 'class'=>'form-control datepicker'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Teléfono</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.telefono', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Estado Civil</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.estado_civil', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Soltero'=>'Soltero', 'Casado'=>'Casado'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Grado Instrucción</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.grado_instruccion', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Sin Estudio'=>'Sin Estudio','Básico'=>'Básico', 'Diversificado'=>'Diversificado','Universitario'=>'Universitario'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 250px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Trabaja?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.isTrabaja', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Si'=>'Si','No'=>'No'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 100px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Tipo de Empleo</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.tipo_empleo', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Fijo'=>'Fijo','Ocasional'=>'Ocasional', 'Libre Ejercicio'=>'Libre Ejercicio','Otro'=>'Otro'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 200px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Ingreso Mensual</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.ingresos', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Parentesco</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.parentesco', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Jefe de Hogar?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.jefe_hogar', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Si'=>'Si','No'=>'No'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 100px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">¿Cant. Aportan?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.personas_aportan', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Total Ingresos</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.total_ingresos', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Egr. Alimentación</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.egreso_alimentacion', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Egr. Salud</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.egreso_salud', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Egr. Servicios</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.egreso_servicios', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Egr. Otros</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.egreso_otros', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                    </fieldset>
                
                    <fieldset>
                        <legend>Datos del Representado</legend>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Vive con Grupo Familiar?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentado.0.isViveGrupoFamiliar', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Si'=>'Si','No'=>'No'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 100px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Financista</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentado.0.financista', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">¿Distancia al Colegio?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentado.0.distancia_colegio', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Transporte?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentado.0.transporte', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Vehiculo Familiar'=>'Vehiculo Familiar','Transporte Publico'=>'Transporte Publico', 'Con Amigo'=>'Con Amigo', 'Privado'=>'Privado'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 300px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Desayuna?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentado.0.desayuna', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Casa'=>'Casa','Plantel'=>'Plantel', 'Otor'=>'Otro'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Almuerza?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentado.0.almuerza', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Casa'=>'Casa','Plantel'=>'Plantel', 'Otor'=>'Otro'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">¿Presupuesto Diario?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentado.0.presupuesto_diarios', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Algun Familiar Becado?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentado.0.isFamiliarBeca', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('1'=>'Si','0'=>'No'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">¿Cuantos Becados?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentado.0.cuantos', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Presenta Debilidad?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentado.0.isPresenteDebilidad', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Si'=>'Si','No'=>'No'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿En la Vista?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentado.0.isVista', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Si'=>'Si','No'=>'No'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿En los Oidos?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentado.0.isOido', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Si'=>'Si','No'=>'No'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Convulsiona?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentado.0.isConvulsiones', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Si'=>'Si','No'=>'No'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Caso Especial?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentado.0.isCasoEspecial', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Si'=>'Si','No'=>'No'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">¿Otras?, Especifique</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentado.0.otras', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Observaciones</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentado.0.observaciones', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                    </fieldset>
                
                    <fieldset>
                        
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

        $('#rootwizard').bootstrapWizard({
            'nextSelector': '.next',
            'previousSelector': '.previous',
            onNext: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            },
            onPrevious: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#rootwizard').find('.progress-bar').css('width', $percent + '%');
                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            },
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#rootwizard').find('.bar').css({width: $percent + '%'});
            }
        });
        $('#rootwizard .finish').click(function() {
            alert('Finished!, Starting over!');
            $('#rootwizard').find('a[href*=\'tab1\']').trigger('click');
        });
    });
</script>