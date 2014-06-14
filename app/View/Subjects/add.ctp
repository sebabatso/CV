<h1>Add Subject</h1>
<hr>
<?php
	echo $this->Form->create('Subject', array('inputDefaults'=>array('label'=> false)));		
?>
<table>
	<tr>
		<td>
			Name:
		</td>
		<td>
			<?php echo $this->Form->input('name');?>
		</td>
	</tr>
	<tr>
		<td>
			Description:
		</td>
		<td>
			<?php echo $this->Form->input('subDescription');?>
		</td>
	</tr>
	<tr>
		<td>
			mark:
		</td>
		<td>
			<?php echo $this->Form->input('mark');?>
		</td>
	</tr>
	<tr> 
		<td>
			Qualification ID:
		</td>
		<td>
			<?php echo $this->Form->input('qualification');?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->Form->end('Add Subject');?>
		</td>
	</tr>
</table>
<hr>