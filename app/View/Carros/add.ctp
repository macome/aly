

<div class="row">
	<div class="col-md-10">
		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Adicionar Carros</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->Form->create('Carro', array('class'=>'form-horizontal')); ?>
            
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">
                  <span class=""></span>Matricula</label>

                  <div class="col-sm-10">
                  <?php echo $this->Form->input('matricula', array('label'=>false, 'class' =>'form-control')); ?>
                    
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">chassis</label>

                  <div class="col-sm-10">
                  <?php echo $this->Form->input('chassis', array('label'=>false, 'class' =>'form-control')); ?>
                    
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">modelo</label>

                  <div class="col-sm-10">
                  <?php echo $this->Form->input('modelo', array('label'=>false, 'class' =>'form-control')); ?>
                    
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">cor</label>

                  <div class="col-sm-10">
                  <?php echo $this->Form->input('cor', array('label'=>false, 'class' =>'form-control')); ?>
                    
                  </div>
                </div>
                <button type="submit" class="btn btn-info pull-right">Adicionar</button>

                <?php echo $this->Form->end(); ?>
            </div>
        </div> 
    </div>
	<div class="col-md-2">
        <ul class="list-group">
		  <li class="list-group-item list-group-item-success">Menu</li>
		  <li class="list-group-item list-group-item-info"><?php echo $this->Html->link(__('List Carros'), array('action' => 'index')); ?></li>
		  <li class="list-group-item list-group-item-warning"><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?></li>
		  <li class="list-group-item list-group-item-danger"><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?></li>
		</ul>
	</div>

</div>
    