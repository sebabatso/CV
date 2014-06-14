<h1>Add References</h1>
<hr>
<?php
	echo $this->Form->create('Reference',array('type' => 'file','inputDefaults'=>array('label'=> false)));
	
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
			Position:
		</td>
		<td>
			<?php echo $this->Form->input('position');?>
		</td>
	</tr>
	<tr>
		<td>
			Address:
		</td>
		<td>
			<?php echo $this->Form->input('address');?>
		</td>
	</tr>
	<tr>
		<td>
			Contact Number:
		</td>
		<td>
			<?php echo $this->Form->input('contact_number');?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $this->Form->end('Add Reference');?>
		</td>		
	</tr>
</table>	
<hr>