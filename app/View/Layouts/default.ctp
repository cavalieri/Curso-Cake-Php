<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php echo $this->Html->css('style'); ?>
</head>
<body>
<div id="topo">
	<div id="header">
    
    <div id="logo">    
    	<?php echo $this->Html->link($this->Html->image('logo.png', array("alt"=>"Evento", "title"=>"Evento")), 
			array("controller"=>"pages", "action"=>"display"),array('escape'=>false)); 	
    	?>
    </div><!--logo-->
    
		<div id="menu">
			<?php echo $this->element('menu',array('cache'=> true)); ?>
    	</div><!--menu-->
    </div><!--header-->
    
</div><!--topo-->

<div id="content"> 
		<?php echo $this->fetch('content'); ?>   	
</div><!--content-->

<?php echo $this->element('footer', array('ano'=> '2012')); ?>


    
	

