<div class="creations form">
<?php echo $this->Form->create('Creation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Creation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('creation_type_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Creation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Creation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Creations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Creation Types'), array('controller' => 'creation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Creation Type'), array('controller' => 'creation_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
