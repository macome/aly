<div class="carros view">
<h2><?php echo __('Carro'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($carro['Carro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chassis'); ?></dt>
		<dd>
			<?php echo h($carro['Carro']['chassis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($carro['Carro']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo h($carro['Carro']['modelo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cor'); ?></dt>
		<dd>
			<?php echo h($carro['Carro']['cor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($carro['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $carro['Cliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Carro'), array('action' => 'edit', $carro['Carro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Carro'), array('action' => 'delete', $carro['Carro']['id']), array(), __('Are you sure you want to delete # %s?', $carro['Carro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Carros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
