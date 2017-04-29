<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="row">

	<div class="col-md-10">
		<div class="input-group">
  			<input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
  			<span class="input-group-addon" id="basic-addon2">@example.com</span>
		</div>

		<div class="box box-default">
		    <div class="carros index">
		

				<h2><?php echo __('Carros'); ?></h2>
				<table class="table table-striped"cellpadding="0" cellspacing="0">
						<thead>
							<tr>
								<th><?php echo $this->Paginator->sort('id'); ?></th>
								<th><?php echo $this->Paginator->sort('chassis'); ?></th>
								<th><?php echo $this->Paginator->sort('matricula'); ?></th>
								<th><?php echo $this->Paginator->sort('modelo'); ?></th>
								<th><?php echo $this->Paginator->sort('cor'); ?></th>
								<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
								<th class="actions"><?php echo __('Actions'); ?></th>
							</tr>
						</thead>
					<tbody>
						<?php foreach ($carros as $carro): ?>
							<tr>
								<td><?php echo h($carro['Carro']['id']); ?>&nbsp;</td>
								<td><?php echo h($carro['Carro']['chassis']); ?>&nbsp;</td>
								<td><?php echo h($carro['Carro']['matricula']); ?>&nbsp;</td>
								<td><?php echo h($carro['Carro']['modelo']); ?>&nbsp;</td>
								<td><?php echo h($carro['Carro']['cor']); ?>&nbsp;</td>
								<td>
									<?php echo $this->Html->link($carro['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $carro['Cliente']['id'])); ?>
								</td>
								<td class="actions">
									<?php echo $this->Html->link(__('View'), array('action' => 'view', $carro['Carro']['id'])); ?>
									<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $carro['Carro']['id'])); ?>
									<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $carro['Carro']['id']), array(), __('Are you sure you want to delete # %s?', $carro['Carro']['id'])); ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
	</div>
	
</div>


</div>

	<div class="col-md-2">

		<ul class="list-group">
			<li class="list-group-item list-group-item-success">Menu</li>
			<li class="list-group-item list-group-item-info"><?php echo $this->Html->link(__('New Carro'), array('action' => 'add')); ?>
			</li>
			 <li class="list-group-item list-group-item-warning"><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> 
			</li>
			<li class="list-group-item list-group-item-danger"><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?>
			</li>
		</ul>
	</div>
</div>