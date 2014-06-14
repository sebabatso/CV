<h1>Reference</h1>
[<?php echo $this->Html->link('Add Reference', array('action' => 'add'));?>]
<hr>

<?php foreach($references as $reference):?>
<h3>(<?php echo $reference['Reference']['id'];?>) <?php echo $reference['Reference']['name'];?></h3>
<p>
		<?php echo $reference['Reference']['position'];?></br>
		<?php echo $reference['Reference']['address'];?></br>
		<?php echo $reference['Reference']['contact_number'];?></br>
</p>		
	
[<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $reference['Reference']['id']),array('confirm' => 'Are you sure?'));?>]
[<?php echo $this->Html->link('Edit', array('action' => 'edit', $reference['Reference']['id']));?>]
<hr>	
<?php endforeach; ?>
<?php unset($reference); ?>
