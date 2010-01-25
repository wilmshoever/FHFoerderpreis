<?php
/* Abfrage des Inhalts über get-Parameter. z.B. fhbk.de/foerderpreis/index.php?id=mitmachen */
$page=$_GET['id'];
/* Wenn in $page was drinnen steht, dann: */
if($page) 
		{ 
			/* For security reasons only */
			$page=strip_tags($page);
			$page=stripslashes($page);
			/* Sidebar setzen */
			$sidebar=$page;
			$sidebar.='_sidebar';	
		}
/* Ansonsten wird die Variable mit einem Default wert geschrieben */
	else {
		$page='index';
	}
/* Checken ob für die Unterseite eine Sidebar existiert */
$bol=file_exists('./content/'.$sidebar.'.php');
	if($bol) 
		{
			/* Nix passiert */ 
		}
	else {
/* Wenn die Datei nicht existiert, wird die Standardsidebar genutzt. */
		$sidebar='index_sidebar';
	}
?>


<!Doctype:HTML>
<html>
	<?php include('./modules/head.php'); ?>
<body>
	<div id="main">
    	<div id="navigation" class="green_gradient">
			<?php include('./modules/top_navigation.php'); ?>
		</div>
		<div id="content">
			<?php include('./modules/content.php'); ?>
		</div>
		<div id="footer">
			<?php include('./modules/footer.php'); ?>
		</div>
	</div>
</body>

</html>