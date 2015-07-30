<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('script');
	?>

	<link href="/imachan/app/webroot/imachan/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/imachan/app/webroot/imachan/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="/imachan/app/webroot/imachan/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="/imachan/app/webroot/imachan/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="/imachan/app/webroot/imachan/css/owl.carousel.css" rel="stylesheet" media="screen" />
	<link href="/imachan/app/webroot/imachan/css/owl.theme.css" rel="stylesheet" media="screen" />  
	<link href="/imachan/app/webroot/imachan/css/animate.css" rel="stylesheet" />
	<link href="/imachan/app/webroot/imachan/css/style.css" rel="stylesheet">
	<link href="/imachan/app/webroot/imachan/color/default.css" rel="stylesheet">

</head>
<body>

	<!-- Header -->
	<div id="navigation">
	    <nav class="navbar navbar-custom" role="navigation">
            <div class="container">
            	<div class="row">
              		<div class="col-md-12">
	  	                <div class="navbar-header">
            				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            					<i class="fa fa-bars"></i>
            				</button>
              			</div>
      		  			<div class="collapse navbar-collapse" id="menu">
                        	<ul class="nav navbar-nav">
                            	<li class="active"><a href="#intro">Home</a></li>
                                <li><a href="#about">model recruitment</a></li>
         			 			<li><a href="#gallery">Post</a></li>                                   
                                <li><a href="#contact">photo garally</a></li>
                            </ul>
                        </div>
            		</div>
            	</div>
         	</div>
        </nav>
	</div> 
	<!-- Header -->

	<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>
	
	<!-- Footer -->
	<footer>
	    <div class="container">
		    <div class="row">
	        	<div class="col-md-12 col-lg-12">
	        		<p>&copy;Copyright 2014 . Alice Lonely . design by <a href="">Bootstraptaste</a></p>
	      		</div>
	    	</div>  
	    </div>
	</footer>
	<!-- Footer -->

</body>
</html>