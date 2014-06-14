<!-- File: /app/View/Posts/index.ctp -->
<h2>COMPUTER SYSTEMS ENGINEERING</h2>
<h2>Software Developer/Programmer</h2>
<hr>

<?php foreach($users as $user):?>
<div id = "pic">	
	<?php echo $this->Html->image('/img/uploads/'.$user['User']['picture']); ?>	
</div>

<div id = "personal">
	<fieldset id= "personal" >
		<legend>Personal:</legend>
		Name:		<?php echo $user['User']['name']; ?></br>
		Surname:		<?php echo $user['User']['surname']; ?></br>
		Date of Birth:	<?php echo $user['User']['date_of_birth']; ?></br>
		Nationality:		<?php echo $user['User']['nationality']?></br>
		Email address:	<?php echo $user['User']['email_address']?></br>
		Cellphone Number:<?php echo $user['User']['contact']?></br>
		<?php echo $this->Html->link('Edit User',array('action' => 'edit', $user['User']['id'])); ?>
	</fieldset>	
</div>
</br></br>
<div>	
	
</div>
<hr>	
<?php endforeach; ?>
<?php unset($user); ?>
<p>
	I have always been interested in all aspects of a computer, from the electronics through to programming, practical applications 
	and the role of computing in society, not only focusing on how computer systems themselves work but also how they integrate into larger picture. 
	That is why I am studying Computer Systems Engineering at Tshwane University of Technology.
</p>