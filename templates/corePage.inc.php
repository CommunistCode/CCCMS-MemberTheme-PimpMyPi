<html>
	
  <head>
 
     <!-- Javascript CSS Hacks -->
    <script src="<?php echo(DIRECTORY_PATH); ?>/base/themes/berry/scripts/cssTricks.js"></script> 

		<title><?php echo(SITE_NAME." : ".$_title); ?></title>
		
    <link href="<?php echo(DIRECTORY_PATH); ?>/base/themes/<?php echo($_pageTools->getTheme("base")); ?>/stylesheets/cssReset.css" rel="stylesheet" />
    <link href="<?php echo(DIRECTORY_PATH); ?>/base/themes/<?php echo($_pageTools->getTheme("base")); ?>/stylesheets/base.css" rel="stylesheet" type="text/css" />		
    <link href="themes/<?php echo($_pageTools->getTheme("membership")); ?>/stylesheets/memberStyle.css" rel="stylesheet" type="text/css" />

    <!--[if IE]>
     <link href="<?php echo(DIRECTORY_PATH); ?>/themes/berry/stylesheets/ie.css" rel="stylesheet" />
    <![endif]-->
	
  </head>
	
  <body>
	
  	<div id="mainContainer">
	
  		<div id="title">
	
  			<?php 
					require_once(FULL_PATH."/base/themes/".$_pageTools->getTheme("base")."/templates/title.inc.php"); 
				?>
	
  		</div>

      <div class='brownSpacer'></div>
	
  		<div id='navBar'>
	
  			<?php 
					require_once(FULL_PATH."/base/themes/".$_pageTools->getTheme("base")."/templates/links.inc.php"); 
				?>
	
  		</div>
	
      <div class='brownSpacer'></div>
  		
      <div id='body' class='faux'>

				<div class="sidebar">
	
  				<?php
						require_once("includes/memberLinks.inc.php");
					?>
	
  			</div>
			
				<div class="sideBody">
		
			  	<?php

						echo("<h1>".$_heading."</h1>");

						if (isset($_content)) {

							echo($_content);

						}

	        ?>

				</div>
	
  		</div>
	
      <div class='brownSpacer'></div>
		  
      <div id="footer">
			  
        <?php 
				  require_once(FULL_PATH."/base/themes/".$_pageTools->getTheme("base")."/templates/footer.inc.php"); 
			  ?>
		
      </div>
		
  	</div>

  <script type='text/javascript'>

    setCSSHeight();

  </script>
	
  </body>

</html>
