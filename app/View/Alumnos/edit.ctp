<?php debug($this->request->data); ?>
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
                                <?php echo $this->Form->input('Alumno.id');?>
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
                        <legend>Información del Alumno</legend>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Talla de Pantalón</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoAlumno.0.talla_pantalon', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Talla de Camisa</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoAlumno.0.talla_camisa', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Talla de Zapatos</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoAlumno.0.talla_zapatos', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Peso</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoAlumno.0.peso', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Estatura</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoAlumno.0.estatura', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Esta Becado?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoAlumno.0.isBecado', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('No'=>'No', 'Si'=>'Si'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Tipo de Beca</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoAlumno.0.tipo_beca', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array('Nacional'=>'Nacional', 'Estadal'=>'Estadal', 'Municipal'=>'Municipal', 'Privada'=>'Privada'),
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>

                    </fieldset>
                
                    <fieldset>
                        <legend>Lugar de Nacimiento</legend>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Estado</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'LugarNacimiento.0.estado_id', 
                                        array(
                                            'type'=>'select',
                                            'options'=>$estados,
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Municipio</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('LugarNacimiento.0.municipio', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Parroquia</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('LugarNacimiento.0.parroquia', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Ciudad</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('LugarNacimiento.0.ciudad', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                    </fieldset>
                
                    <fieldset>
                        <legend>Lugar de Residencia</legend>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Estado</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'LugarResidencia.0.estado_id', 
                                        array(
                                            'type'=>'select',
                                            'options'=>$estados,
                                            'label'=>false, 
                                            'div'=>false, 
                                            'class'=>'chzn-select',
                                            'style'=>array('width: 150px')
                                        )
                                );?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Municipio</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('LugarResidencia.0.municipio', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Parroquia</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('LugarResidencia.0.parroquia', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Ciudad</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('LugarResidencia.0.ciudad', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Dirección</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('LugarResidencia.0.direccion', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
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
                                        'DatoRepresentante.0.DatoRepresentado.0.isViveGrupoFamiliar', 
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
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoRepresentado.0.financista', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">¿Distancia al Colegio?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoRepresentado.0.distancia_colegio', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Transporte?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.DatoRepresentado.0.transporte', 
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
                                        'DatoRepresentante.0.DatoRepresentado.0.desayuna', 
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
                                        'DatoRepresentante.0.DatoRepresentado.0.almuerza', 
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
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoRepresentado.0.presupuesto_diarios', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Algun Familiar Becado?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.DatoRepresentado.0.isFamiliarBeca', 
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
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoRepresentado.0.cuantos', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">¿Presenta Debilidad?</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.DatoRepresentado.0.isPresenteDebilidad', 
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
                                        'DatoRepresentante.0.DatoRepresentado.0.isVista', 
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
                                        'DatoRepresentante.0.DatoRepresentado.0.isOido', 
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
                                        'DatoRepresentante.0.DatoRepresentado.0.isConvulsiones', 
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
                                        'DatoRepresentante.0.DatoRepresentado.0.isCasoEspecial', 
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
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoRepresentado.0.otras', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Observaciones</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoRepresentado.0.observaciones', array('label'=>false, 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                    </fieldset>
                
                    <fieldset>
                        <legend>Datos de la Vivienda</legend>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Tenencia</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.DatoVivienda.0.tenencia', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array(
                                                'Propia'=>'Propia',
                                                'Propia Pagandose'=>'Propia Pagándose',
                                                'Alquilada'=>'Alquilada',
                                                'Prestada'=>'Prestada'
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
                            <label class="col-lg-2 control-label" for="select01">Tipo de Vivienda</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.DatoVivienda.0.tipo', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array(
                                                'Casa'=>'Casa',
                                                'Casa de Vecindad'=>'Casa de Vecindad',
                                                'Rancho'=>'Rancho',
                                                'Apartamento'=>'Apartamento',
                                                'Quinta'=>'Quinta'
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
                            <label class="col-lg-2 control-label" for="focusedInput">Material Paredes</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.paredes', array('label'=>false, 'placeholder'=>'Materiales Predominantes en las paredes.', 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Material Techo</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.techo', array('label'=>false, 'placeholder'=>'Materiales Predominantes en el techo.', 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput">Material Pisos</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.piso', array('label'=>false, 'placeholder'=>'Materiales Predominantes en los pisos.', 'div'=>false, 'class'=>'form-control'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Cantidad Habitaciones</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.DatoVivienda.0.habitaciones', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array(
                                                '1'=>'1 Habitación',
                                                '2'=>'2 Habitaciones',
                                                '3'=>'3 Habitaciones',
                                                '4'=>'4 Habitaciones',
                                                '5'=>'5 Habitaciones'
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
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-4">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isSala', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Sala?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-4">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isComedor', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Comedor?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="select01">Cantidad Baños</label>
                            <div class="col-lg-10">
                                <?php echo $this->Form->input(
                                        'DatoRepresentante.0.DatoVivienda.0.banos', 
                                        array(
                                            'type'=>'select',
                                            'options'=>array(
                                                '1'=>'1 Baño',
                                                '2'=>'2 Baños',
                                                '3'=>'3 Baños',
                                                '4'=>'4 Baños',
                                                '5'=>'5 Baños'
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
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-5">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isGaraje', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Garage?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-5">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isPatio', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Patio?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>

                    </fieldset>
                    
                     <fieldset>
                        <legend>Servicios Publicos</legend>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-5">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isElectricidad', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Servicio Electrico?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-5">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isAgua', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Servicio de Agua Potable?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-5">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isAseo', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Servicio de Aseo Urbano?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-5">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isCloacas', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Servicio de Agua Servidad?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-5">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isTelefono', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Servicio Teléfonico?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-5">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isAlumbrado', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Servicio de Alumbrado?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-5">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isAsfalto', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Calles Asfalatadas?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="focusedInput"></label>
                            <div class="col-lg-5">
                                <?php echo $this->Form->input('DatoRepresentante.0.DatoVivienda.0.isCable', array('label'=>array('class'=>'uniform', 'text'=>'¿Tiene Servicio Televisión por Cable?'), 'placeholder'=>'', 'div'=>false, 'class'=>'uniform_on'));?>
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
    });
</script>
