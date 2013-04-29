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
		<dt><?php echo __('Creation Type Id'); ?></dt>
		<dd>
			<?php echo h($creation['Creation']['creation_type_id']); ?>
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
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Creation Types'), array('controller' => 'creation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Creation Type'), array('controller' => 'creation_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Creation Types'); ?></h3>
	<?php if (!empty($creation['CreationType'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($creation['CreationType'] as $creationType): ?>
		<tr>
			<td><?php echo $creationType['id']; ?></td>
			<td><?php echo $creationType['type']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'creation_types', 'action' => 'view', $creationType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'creation_types', 'action' => 'edit', $creationType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'creation_types', 'action' => 'delete', $creationType['id']), null, __('Are you sure you want to delete # %s?', $creationType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Creation Type'), array('controller' => 'creation_types', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
