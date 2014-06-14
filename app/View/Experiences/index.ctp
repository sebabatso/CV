<h1>Experience</h1>
[<?php echo $this->Html->link('Add Experience', array('action' => 'add'));?>]
<hr>

<?php foreach($experiences as $experience):?>
<h3>(<?php echo $experience['Experience']['id'];?>) <?php echo $experience['Experience']['position'];?></h3>
<p>
		<?php echo $experience['Experience']['company'];?></br>
		<?php echo $experience['Experience']['responsibilities'];?></br>
		<?php echo $experience['Experience']['duration'];?></br>
</p>		
	
[<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $experience['Experience']['id']),array('confirm' => 'Are you sure?'));?>]
[<?php echo $this->Html->link('Edit', array('action' => 'edit', $experience['Experience']['id']));?>]
<hr>	
<?php endforeach; ?>
<?php unset($experience); ?>
