<h1>Add Experience</h1>
<hr>
<?php
	echo $this->Form->create('Experience', array('type' => 'file','inputDefaults'=>array('label'=> false)));		
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
			<?php echo $this->Form->end('add Experience');?>
		</td>
	</tr>
</table>
<hr>