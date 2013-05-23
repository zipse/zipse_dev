<div class="playlists view">
<h2><?php  echo __('Playlist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($playlist['Playlist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($playlist['Playlist']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($playlist['Playlist']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($playlist['User']['user_name'], array('controller' => 'users', 'action' => 'view', $playlist['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Playlist'), array('action' => 'edit', $playlist['Playlist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Playlist'), array('action' => 'delete', $playlist['Playlist']['id']), null, __('Are you sure you want to delete # %s?', $playlist['Playlist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Playlists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Playlist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
