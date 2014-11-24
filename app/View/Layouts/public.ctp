<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                
                
                echo $this->Html->css('bootstrap.css?j='.  uniqid());
                echo $this->Html->css('bootstrap-theme.min');
                echo $this->Html->css('bootstrap-admin-theme');
                echo $this->Html->css('bootstrap-admin-theme-change-size');
                echo $this->Html->css('vendors/bootstrap-datepicker/css/datepicker');
                echo $this->Html->css('datepicker.fixes');
                echo $this->Html->css('vendors/uniform/themes/default/css/uniform.default.min');
                echo $this->Html->css('uniform.default.fixes');
                echo $this->Html->css('vendors/chosen.min');
                echo $this->Html->css('vendors/selectize/dist/css/selectize.bootstrap3');
                echo $this->Html->css('vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/stylesheets/bootstrap-wysihtml5/core-b3');
                
                echo $this->Html->script('jquery-2.1.1.min');
                echo $this->Html->script('bootstrap.min');
                echo $this->Html->script('twitter-bootstrap-hover-dropdown.min');
                echo $this->Html->script('bootstrap-admin-theme-change-size');
                echo $this->Html->script('vendors/uniform/jquery.uniform.min');
                echo $this->Html->script('vendors/chosen.jquery.min');
                echo $this->Html->script('vendors/selectize/dist/js/standalone/selectize');
                echo $this->Html->script('vendors/bootstrap-datepicker/js/bootstrap-datepicker');
                echo $this->Html->script('vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/wysihtml5');
                echo $this->Html->script('vendors/bootstrap-wysihtml5-rails-b3/vendor/assets/javascripts/bootstrap-wysihtml5/core-b3');
                echo $this->Html->script('vendors/twitter-bootstrap-wizard/jquery.bootstrap.wizard-for.bootstrap3');
                echo $this->Html->script('vendors/boostrap3-typeahead/bootstrap3-typeahead.min');
                
	?>
</head>
<body class="bootstrap-admin-with-small-navbar">
    
    <?php echo $this->element('small-nav'); ?>
    <?php echo $this->element('main-large-nav'); ?>
    <?php echo $this->element('container'); ?>
    
    <?php //echo $this->element('sql_dump'); ?>
    	
</body>
</html>

