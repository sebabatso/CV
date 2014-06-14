<h1>Subjects</h1>
[<?php //echo $this->Html->link('Add Qualification', array('action' => 'add'));?>]
<hr>
<div id = "subjects">
<table style="font-size:10px"> 
	<tr>
		<th>
			ID
		</th>
		<th>
			Subject
		</th>
		<th>
			Description
		</th>
		<th>
			Mark
		</th>
	</tr>

<?php foreach($subjects as $subject):?>

	<tr>
		<td>
			<?php echo $subject['Subject']['id'];?>
		</td>
		<td>
			<?php echo $subject['Subject']['name'];?>		
		</td>
		<td>
			<?php echo $subject['Subject']['subDescription'];?>
		</td>
		<td>
			<?php echo $subject['Subject']['mark'];?>
		</td>
	</tr>
	<?php endforeach; ?>

</table>
			
[<?php //echo $this->Form->postLink('Delete',array('action' => 'delete', $education['Education']['id']),array('confirm' => 'Are you sure?'));?>]
[<?php //echo $this->Html->link('Edit', array('action' => 'edit', $education['Education']['id']));?>]
<div>
<hr>	

<?php unset($education); ?>
