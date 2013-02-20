<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		

		echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>';
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		
		echo $this->Html->script('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="content">
		
		    <div style="text-align: right;">
		        <?php if ($logged_in): ?>
		            Welcome <?php echo $current_user['user_name']; ?>. <?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?>
		        <?php else: ?>
		            <?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?>
		        <?php endif; ?>
		    </div>
		    
			<?php echo $this->Session->flash(); ?>

