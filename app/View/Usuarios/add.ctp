
<div class="row">
 	<div class="col-md-10">
		<div class="box box-info">
			<div class="box-header with-border">
			    <h3 class="box-title">Adicionar Usuarios</h3>
			</div>
			    	<?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index'),array('class'=>"	btn btn-info"));?>
			    	<?php echo $this->Form->create('Usuario', array('class'=>'form-horizontal')); ?>
			            
			        <div class="box-body">
			            <div class="form-group">
			                <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>

			                <div class="col-sm-10">
			                    <?php echo $this->Form->input('Nome', array('label'=>false, 'class' =>'form-control')); ?>
			                </div>
			            </div>
			                <div class="form-group">
			                  <label for="inputPassword3" class="col-sm-2 control-label">Apelido</label>

			                  <div class="col-sm-10">
			                    <?php echo $this->Form->input('Apelido', array('label'=>false, 'class' =>'form-control')); ?>
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

			                  <div class="col-sm-10">
			                    <?php echo $this->Form->input('Email', array('label'=>false, 'class' =>'form-control')); ?>
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-2 control-label">Senha</label>

			                  <div class="col-sm-10">
			                    <?php echo $this->Form->input('Senha', array('label'=>false, 'class' =>'form-control')); ?>
			                  </div>
			                </div>
			                <button type="submit" class="btn btn-info pull-right">Adicionar</button>

			             <?php echo $this->Form->end(); ?>   
			         </div> 
			    
		</div>    
	</div>          			
</div>	               	
			                			
			                	

								
		 		

						              			          


			
		



