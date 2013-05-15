<div class="conversions form">
<?php echo $this->Form->create('Conversion'); ?>
	<fieldset>
		<legend><?php echo __('Add Conversion'); ?></legend>
	<?php
		echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $user['id']));
		echo $this->Form->input('end_file', array('label' => 'File to Convert', 'type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions-toggle">+</div>
<div class="actions actions-slick">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Conversions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
