<div class="conversions view">
<h2><?php  echo __('Conversion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conversion['Conversion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($conversion['User']['user_name'], array('controller' => 'users', 'action' => 'view', $conversion['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End File'); ?></dt>
		<dd>
			<?php echo h($conversion['Conversion']['end_file']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conversion'), array('action' => 'edit', $conversion['Conversion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conversion'), array('action' => 'delete', $conversion['Conversion']['id']), null, __('Are you sure you want to delete # %s?', $conversion['Conversion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conversions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conversion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
