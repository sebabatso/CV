<h1>Edit Experience</h1>
<hr>
<?php
	echo $this->Form->create('Experience', array('type' => 'file','inputDefaults'=>array('label'=> false)));	
	echo $this->Form->input('id',array('type'=>'hidden'));		
?>
<table>
	<tr>
		<td>
			Position:
		</td>
		<td>
			<?php echo $this->Form->input('position');?>
		</td>
	</tr>
	<tr>
		<td>
			Responsibilities:
		</td>
		<td>
			<?php echo $this->Form->input('responsibilities');?>
		</td>
	</tr>
	<tr>
		<td>
			Company:
		</td>
		<td>
			<?php echo $this->Form->input('company');?>
		</td>
	</tr>
	<tr>
		<td>
			Duration:
		</td>
		<td>
			<?php echo $this->Form->input('duration');?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->Form->end('Edit Experience');?>
		</td>
	</tr>
</table>
<hr>