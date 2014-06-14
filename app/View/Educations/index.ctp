<h1>Qualifications</h1>
[<?php echo $this->Html->link('Add Qualification', array('action' => 'add'));?>]
<hr>

<?php foreach($educations as $education):?>
<h3>(<?php echo $education['Education']['id'];?>) <?php echo $education['Education']['course'];?></h3></legend>
<p>
	
			<?php echo $education['Education']['institution'];?></br>
	Start:	<?php echo $education['Education']['start_date'];?></br>
	Finish:	<?php echo $education['Education']['finish'];?></br>
	[<?php echo $this->Html->link('Subjects', array('controller' => 'subjects','action' => 'allCourseSubjects', $education['Education']['id']));?>]
</p>	
[<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $education['Education']['id']),array('confirm' => 'Are you sure?'));?>]
[<?php echo $this->Html->link('Edit', array('action' => 'edit', $education['Education']['id']));?>]

<hr>	
<?php endforeach; ?>
<?php unset($education); ?>
