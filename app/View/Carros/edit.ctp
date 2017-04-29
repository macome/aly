<div class="carros form">
<?php echo $this->Form->create('Carro'); ?>
	<fieldset>
		<legend><?php echo __('Edit Carro'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('chassis');
		echo $this->Form->input('matricula');
		echo $this->Form->input('modelo');
		echo $this->Form->input('cor');
		echo $this->Form->input('cliente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Carro.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Carro.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Carros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
