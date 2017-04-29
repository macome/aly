<div class="clientes form">
<!-- <?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('apelido');
		echo $this->Form->input('contacto_pessoal');
		echo $this->Form->input('contacto_alternativo');
		echo $this->Form->input('nuit');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
 --></div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	
</div>
<div class="row" >
	<div class="col-md-10">
		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            
            <div class="form-horizontal">
            	<?php echo $this->Form->create('Cliente'); ?>
              		<div class="box-body">
                		<div class="form-group">
                  			<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>

                  			<div class="col-sm-10">
                    			<?php echo $this->Form->input('nome', array('label'=>false, 'class' =>'form-control')); ?>

                  			</div>
                		</div>
               			 <div class="form-group">
                  			<label for="inputPassword3" class="col-sm-2 control-label">Apelido</label>

                 			<div class="col-sm-10">
                   				 <?php echo $this->Form->input('apelido', array('label'=>false, 'class' =>'form-control'));?>
                 			</div>
                		</div>
                		<div class="form-group">
                 	 		<label for="inputPassword3" class="col-sm-2 control-label">Contacto_Pessoal</label>

                  			<div class="col-sm-10">
                    			<?php echo $this->Form->input('contacto_pessoal', array('label'=>false, 'class' =>'form-control')); ?>
                  			</div>
                		</div>
                		<div class="form-group">
                 			<label for="inputPassword3" class="col-sm-2 control-label">Contacto_Alternativo</label>

                 			<div class="col-sm-10">
                    			<?php echo $this->Form->input('contacto_alternativo', array('label'=>false, 'class' =>'form-control')); ?>
                  			</div>
               			</div>
                		<div class="form-group">
                  			<label for="inputPassword3" class="col-sm-2 control-label">Nuit</label>

                  			<div class="col-sm-10">
                    			<?php echo $this->Form->input('nuit', array('label'=>false, 'class' =>'form-control')); ?>
                  			</div>
               			 </div>
                		<div class="form-group">
                 			<label for="inputPassword3" class="col-sm-2 control-label">E_mail</label>

                  			<div class="col-sm-10">
                   				<?php echo $this->Form->input('email', array('label'=>false, 'class' =>'form-control')); ?>
                  			</div>
               			</div>
                		<<div class="form-group">
                  			<label for="inputPassword3" class="col-sm-2 control-label">Endereco</label>

                  			<div class="col-sm-10">
                    			<?php echo $this->Form->input('Endereco', array('label'=>false, 'class' =>'form-control')); ?>
                  			</div>
                		</div>
               			<!-- <button class="btn btn-info pull-right">Adicionar</button> -->
					<?php echo $this->Form->end(__('Submit')); ?>
              	</div>
              
            </div>
     
        </div>
    </div>
    <div class="col-md-2">
		<ul class="list-group">
			<li class="list-group-item list-group-item-success">Menu</li>
			<li class="list-group-item list-group-item-info"><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?>
					
			</li>
			<li class="list-group-item list-group-item-warning"><?php echo $this->Html->link(__('List Carros'), array('controller' => 'carros', 'action' => 'index')); ?>
					
			</li>
			<li class="list-group-item list-group-item-danger"><?php echo $this->Html->link(__('New Carro'), array('controller' => 'carros', 'action' => 'add')); ?>
					
			</li>
		</ul>
	</div>
</div>
