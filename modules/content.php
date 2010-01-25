

<div class="container_24">
<div class="grid_12">
<!--
	TODO Content der Slideshow dynamisch machen, bzw. von der eigentlichen Moduldatei entkoppeln.
-->
<!--	
	<div id="content_slider">
		<?php // include('./modules/slideshow.php'); ?>
	</div>
-->
	<div class="padding">
		<?php include('./content/'.$page.'.php');?>
		</div>
	</div>
<!-- Sidebar start -->
	<div class="grid_12">
	    <img src="./img/ui/FHFoerderPlakat.png">
	</div>
    <div class="gradient rounded grid_12">
		<div class="padding">
<!-- Text der Box unter dem Logo abrufen. -->
		<?php include('./content/'.$sidebar.'.php');?>
		</div>
	</div>
</div>
<div class="clear"></div>