<div class="conversions form">
<?php echo $this->Form->create('Conversion', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Conversion'); ?></legend>
	<?php
		echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $user['id']));
	?>
		<div class="add-file-wrapper">
		    <span class="btn btn-primary add-file">
			Add File
		    </span>
		</div>
		<?php echo $this->Form->input('file', array('label' => '', 'type' => 'file',  'div' => array( 'class' => 'lineup' ))); ?>
	<?php
		echo $this->Form->input('output', array('label' => 'Convert to: ' , 'div' => array( 'class' => 'lineup' )));
	?>
	</fieldset>
<?php echo $this->Form->end( array( 'label' => 'Convert',  'div' => array('class' => 'btn btn-info login-submit clear-submit'))); ?>
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
