<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>';
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('style');
		
		echo $this->Html->script('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>	
<body>
	<div class="side-nav">
		<ul>
			<li><a href="/about" ><span class="about-tab" id="about-tab"></span></a></li>
			<li><a href="/projects" ><span class="projects-tab" id="projects-tab"></span></a></li>
		</ul>
	</div>
	<div class="side-back-nav">
		<ul>
			<li><a href="/music"><span class="music-tab" id="music-tab"></span></a></li>
		</ul>
	</div>
	<div class="container">
		<div class="header">
			<div style="text-align: right;">
		        <?php if ($logged_in): ?>
		            Welcome <?php echo $current_user['user_name']; ?>. <?php echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout')); ?>
		        <?php else: ?>
		            <?php echo $this->Html->link('Login', array('controller'=>'users', 'action'=>'login')); ?>
		        <?php endif; ?>
		    </div>
		</div>
		<div class="content">
		

		    
			<?php echo $this->Session->flash(); ?>

