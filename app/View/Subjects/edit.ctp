<h1>Edit Subject</h1>
<hr>
<?php
	echo $this->Form->create('Subject',array('type' => 'file','inputDefaults'=>array('label'=> false)));
	echo $this->Form->input('id', array('type'=>'hidden'));
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
			Mark:
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
			<?php echo $this->Form->end('Edit Subject');?>
		</td>		
	</tr>
</table>
<hr>