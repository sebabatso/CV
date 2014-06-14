<h1>Add Qualification</h1>
<hr>
<?php
	echo $this->Form->create('Education', array('type' => 'file','inputDefaults'=>array('label'=> false)));		
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
			<?php echo $this->Form->end('Add Qualification');?>
		</td>
		
	</tr>	
</table>
<hr>