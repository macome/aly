<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apelido'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apelido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto Pessoal'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['contacto_pessoal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto Alternativo'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['contacto_alternativo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nuit'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nuit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carros'), array('controller' => 'carros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carro'), array('controller' => 'carros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Carros'); ?></h3>
	<?php if (!empty($cliente['Carro'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Chassis'); ?></th>
		<th><?php echo __('Matricula'); ?></th>
		<th><?php echo __('Modelo'); ?></th>
		<th><?php echo __('Cor'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Carro'] as $carro): ?>
		<tr>
			<td><?php echo $carro['id']; ?></td>
			<td><?php echo $carro['chassis']; ?></td>
			<td><?php echo $carro['matricula']; ?></td>
			<td><?php echo $carro['modelo']; ?></td>
			<td><?php echo $carro['cor']; ?></td>
			<td><?php echo $carro['cliente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'carros', 'action' => 'view', $carro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'carros', 'action' => 'edit', $carro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'carros', 'action' => 'delete', $carro['id']), array(), __('Are you sure you want to delete # %s?', $carro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Carro'), array('controller' => 'carros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
