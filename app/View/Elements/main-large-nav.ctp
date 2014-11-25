<!-- main / large navbar -->
<nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar bootstrap-admin-navbar-under-small" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="about.html">Admin Panel</a>
                </div>
                <div class="collapse navbar-collapse main-navbar-collapse">
                    <ul class="nav navbar-nav">
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown">Estados <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li role="presentation" class="dropdown-header">Modúlo de Estados</li>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'estados', 'action'=>'index'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Estados</a></li>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'estados', 'action'=>'add'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Agregar Estado</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown">Alumnos <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li role="presentation" class="dropdown-header">Modúlo de Alumnos</li>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'alumnos', 'action'=>'index'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Alumnos</a></li>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'alumnos', 'action'=>'add'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Agregar Alumno</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown">Períodos <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li role="presentation" class="dropdown-header">Modúlo de Períodos</li>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'periodo_academicos', 'action'=>'add'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Agregar Período</a></li>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'periodo_academicos', 'action'=>'index'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Listar Período</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown">Grados <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li role="presentation" class="dropdown-header">Modúlo de Grados</li>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'grados', 'action'=>'add'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Agregar Grado</a></li>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'grados', 'action'=>'index'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Listar Grados</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown">Matriculas <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li role="presentation" class="dropdown-header">Modúlo de Matriculas</li>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'matriculas', 'action'=>'add'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Inscribir Matricula</a></li>
                                <li><a href="<?php echo $this->Html->url(array('controller'=>'matriculas', 'action'=>'index'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Lista de Matriculas</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div>
    </div><!-- /.container -->
</nav>