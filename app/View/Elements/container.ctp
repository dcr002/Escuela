<div class="container">
    <!-- left, vertical navbar & content -->
    <div class="row">
        <!-- left, vertical navbar -->
        <div class="col-md-2 bootstrap-admin-col-left">
            <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                <li>
                    <a href="<?php echo $this->Html->url(array('controller'=>'estados', 'action'=>'index'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Estados</a>
                </li>
                <li>
                    <a href="<?php echo $this->Html->url(array('controller'=>'estados', 'action'=>'add'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Agregar Estado</a>
                </li>
                 <li>
                    <a href="<?php echo $this->Html->url(array('controller'=>'alumnos', 'action'=>'index'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Alumnos</a>
                </li>
                <li>
                    <a href="<?php echo $this->Html->url(array('controller'=>'alumnos', 'action'=>'add'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Agregar Alumno</a>
                </li>
                <li>
                    <a href="<?php echo $this->Html->url(array('controller'=>'periodo_academicos', 'action'=>'add'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Agregar Período</a>
                </li>
                <li>
                    <a href="<?php echo $this->Html->url(array('controller'=>'periodo_academicos', 'action'=>'index'))?>"><i class="glyphicon glyphicon-chevron-right"></i> Listar Período</a>
                </li>
                <!--<li>
                    <a href="forms.html"><i class="glyphicon glyphicon-chevron-right"></i> Forms</a>
                </li>
                <li>
                    <a href="tables.html"><i class="glyphicon glyphicon-chevron-right"></i> Tables</a>
                </li>
                <li>
                    <a href="buttons-and-icons.html"><i class="glyphicon glyphicon-chevron-right"></i> Buttons &amp; Icons</a>
                </li>
                <li>
                    <a href="wysiwyg-editors.html"><i class="glyphicon glyphicon-chevron-right"></i> WYSIWYG Editors</a>
                </li>
                <li>
                    <a href="ui-and-interface.html"><i class="glyphicon glyphicon-chevron-right"></i> UI &amp; Interface</a>
                </li>
                <li>
                    <a href="error-pages.html"><i class="glyphicon glyphicon-chevron-right"></i> Error pages</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">731</span> Orders</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">812</span> Invoices</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">27</span> Clients</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">1,234</span> Users</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">2,221</span> Messages</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">11</span> Reports</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">83</span> Errors</a>
                </li>
                <li>
                    <a href="#"><span class="badge pull-right">4,231</span> Logs</a>
                </li>-->
            </ul>
        </div>

        <!-- content -->
        <div class="col-md-10">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
</div>