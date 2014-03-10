<div class="cars form">
<?php echo $this->Form->create('Car'); ?>
	<fieldset>
		<legend><?php echo __('Add Car'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('model');
		echo $this->Form->input('created_at');
		echo $this->Form->input('modified_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cars'), array('action' => 'index')); ?></li>
	</ul>
</div>
