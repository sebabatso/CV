<h1>Add User</h1>
<hr>
<?php
	//echo $this->Form->create('User', array('type' => 'file','inputDefaults'=>array('label'=> false)),'enctype' => 'multipart/form-data');
	echo $this->Form->create('User', array('url' => array('action' => 'add'), 'enctype' => 'multipart/form-data','inputDefaults'=>array('label'=> false))); 	
?>
<table>
	<tr>
		<td>
			Name:
		</td>
		<td>
			<?php echo $this->Form->input('name'); ?>
		</td>		
	</tr>
	<tr>
		<td>
			Surname:
		</td>			
		<td>
			<?php echo $this->Form->input('surname'); ?>
		</td>
	</tr>
	<tr>
		<td>
			Date of Birth:
		</td>
		<td>
			<?php echo $this->Form->input('date_of_birth'); ?>
		</td>		
	</tr>
	<tr>
		<td>
			Nationality:
		</td>
		<td>
			<?php echo $this->Form->input('nationality');?>
		</td>
		</td>
	</tr>
	<tr>
		<td>
			Email Address:
		</td>
		<td>
			<?php echo $this->Form->input('email_address');?>
		</td>		
	</tr>
	<tr>
		<td>
			Contact Number:
		</td>
		<td>
			<?php echo $this->Form->input('contact');?>
		</td>
	</tr>
	<tr>
		<td>
		      Picture:
		</td>
		<td>
			<?php echo $this->Form->input('picture', array('type'=> 'file','label' => false,'div' => false));?>
		</td>		
	</tr>
	<tr>
		<td>
			<?php echo $this->Form->end('Add User');?>
		</td>		
	</tr>
</table>
<hr>