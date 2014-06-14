<h1>Subject</h1>
[<?php //echo $this->Html->link('Add Qualification', array('action' => 'add'));?>]
<hr>
<div id = "subject">
<table >
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

	<tr>
		<td>
			<?php echo $subjects['Subject']['id'];?>
		</td>
		<td>
			<?php echo $subjects['Subject']['name'];?>		
		</td>
		<td>
			<?php echo $subjects['Subject']['subDescription'];?>
		</td>
		<td>
			<?php echo $subjects['Subject']['mark'];?>
		</td>
	</tr>
</table>
			
[<?php //echo $this->Form->postLink('Delete',array('action' => 'delete', $education['Education']['id']),array('confirm' => 'Are you sure?'));?>]
[<?php //echo $this->Html->link('Edit', array('action' => 'edit', $education['Education']['id']));?>]
</div>
<hr>	

<?php unset($education); ?>
