<h2><?php echo __('Usuarios'); ?></h2>
<div class="row">
	<div class="col-md-10">
		<div class="box box-default">
			
			<div class="usuarios index">
				
					<table class="table table-striped" cellpadding="0" cellspacing="0">
						<thead>
							<tr>
									<th><?php echo $this->Paginator->sort('id'); ?></th>
									<th><?php echo $this->Paginator->sort('nome'); ?></th>
									<th><?php echo $this->Paginator->sort('apelido'); ?></th>
									<th><?php echo $this->Paginator->sort('email'); ?></th>
									<th><?php echo $this->Paginator->sort('senha'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($usuarios as $usuario): ?>
								<tr>
									<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
									<td><?php echo h($usuario['Usuario']['nome']); ?>&nbsp;</td>
									<td><?php echo h($usuario['Usuario']['apelido']); ?>&nbsp;</td>
									<td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
									<td><?php echo h($usuario['Usuario']['senha']); ?>&nbsp;</td>
									<td class="actions">
										<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
										<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
										<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					
					
			</div>
		</div>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?></li>
	</ul>
</div>