<h1>Edit Qualification</h1>
<hr>
<?php
	echo $this->Form->create('Education', array('type' => 'file','inputDefaults'=>array('label'=> false)));	
	echo $this->Form->input('id',array('type'=>'hidden'));	
?>	
<table>
	<tr>
		<td>
			Course:
		</td>
		<td>
			<?php echo $this->Form->input('course');?>
		</td>
	</tr>
	<tr>
		<td>
			Instutution:
		</td>
		<td>
			<?php echo $this->Form->input('institution');?>
		</td>
	</tr>
	<tr>
		<td>
			Start Date:
		</td>
		<td>
			<?php echo $this->Form->input('start_date');?>
		</td>
	</tr>
	<tr>
		<td>
			Finish:
		</td>
		<td>
			<?php echo $this->Form->input('finish');?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->Form->end('Edit Qualification');?>
		</td>
		
	</tr>	
</table>
<hr>