<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		METLA JS
	</title>
	<?php
		echo $this->Html->meta('icon');
		//echo $this->Html->meta('keywords','WOW Slider, bootstrap slider, javascript slider');
		//echo $this->Html->meta('description','WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow');
		echo $this->Html->css(array('style','style1'));
		echo $this->Html->script('jquery');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
				METLA JOHNSON SEBABATSO	
			</h1>
		</div>
		<div id = "wrap">
			<div id="stylefive">
				<ul>
					<li><?php echo $this->Html->link('Home',array('controller' => 'users', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link('Education','#'); ?>
						<ul>
							<li>	<?php echo $this->Html->link('Qualification',array('controller' => 'educations', 'action' => 'index')); ?></li>
							<li>	<?php //echo $this->Html->link('Subjects',array('controller' => 'subjects', 'action' => 'index')); ?></li>												
						</ul>				
					</li>
					<li><?php echo $this->Html->link('Experience',array('controller' => 'experiences', 'action' => 'index')); ?></li>			
					<li><?php echo $this->Html->link('Reference',array('controller' => 'references', 'action' => 'index')); ?></li>				
				</ul>            
			</div>
		</div>	
		<div id="content-container1">
			<div id="content-container2">
				
				<div id="section-navigation">	
					<?php echo $this->Html->image('motive.jpg') ;?></br>	
					<?php echo $this->Html->image('http://static.viewbook.com/images/social_icons/facebook_32.png', array('url' => 'http://www.facebook.com/metla.sebabatso')) ;?>
					<?php echo $this->Html->image('http://static.viewbook.com/images/social_icons/twitter_32.png', array('url' => 'http://www.twitter.com')) ;?>	
					<?php echo $this->Html->image('http://static.viewbook.com/images/social_icons/linkedin_32.png', array('url' => 'http://www.linkedin.com')) ;?>
					<?php echo $this->Html->image('http://static.viewbook.com/images/social_icons/google_32.png', array('url' => 'http://www.google.com')) ;?>	
					<?php echo $this->Html->image('http://static.viewbook.com/images/social_icons/blogger_32.png', array('url' => 'http://www.blogger.com')) ;?>
						
				</div>
				
				<div id="content">
								
					<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
								                                
                                </div>
				<div id="aside">
					<h3>
						Information Technology
					</h3>
					<div id="wowslider-container1">
						<div class="ws_images">
							<ul>
								<li><?php echo $this->Html->image('bg-pattern1.jpg', array('alt' => 'bgpattern1','title'=>'bg-pattern1','id'=>'wows1_0')) ;?>
								<li><?php echo $this->Html->image('bg-pattern2.jpg', array('alt' => 'bgpattern2','title'=>'bg-pattern2','id'=>'wows1_1')) ;?>
								<li><?php echo $this->Html->image('bg-pattern3.jpg', array('alt' => 'bgpattern3','title'=>'bg-pattern3','id'=>'wows1_2')) ;?>
								<li><?php echo $this->Html->image('computer.jpg', array('alt' => 'computer','title'=>'computer','id'=>'wows1_3')) ;?>
							</ul>
						</div>						
					</div>
					<?php
						//echo $this->Html->script('wowslider');
						//echo $this->Html->script('script');
					?>
					<p>
						The first rule of any technology used in a business is that automation applied to an efficient
						operation will magnify the efficiency. The second is that automation applied to an inefficent 
						operation will magnify the inefficiency. (Bill Gates).
						
					</p>
					<div  id="wowslider-container1">
						<div class="ws_images">
							<?php //echo $this->Html->image('http://www.000webhost.com/images/120x60_powered.gif',array('url' => 'http://www.000webhost.com')) ;?>			
						<div>
					</div>
				</div>				
			</div>			
		</div>
		<div id="footer">
				Copyright © Metla, 2014			 
		</div>	
	</div>
</body>
</html>

