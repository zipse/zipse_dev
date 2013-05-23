<div class="creations view">
<h2><?php  echo __('Creation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($creation['Creation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($creation['Creation']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($creation['Creation']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($creation['CreationType']['type'], array('controller' => 'creation_types', 'action' => 'view', $creation['CreationType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($creation['User']['user_name'], array('controller' => 'users', 'action' => 'view', $creation['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Creation'), array('action' => 'edit', $creation['Creation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Creation'), array('action' => 'delete', $creation['Creation']['id']), null, __('Are you sure you want to delete # %s?', $creation['Creation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Creations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Creation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Creation Types'), array('controller' => 'creation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Creation Type'), array('controller' => 'creation_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
