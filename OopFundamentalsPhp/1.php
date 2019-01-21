<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">


		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php



		// class definition in php

        class Cars {


        }

        $my_classes = get_declared_classes(); // for finding all classes which i8s declared by php
        foreach ($my_classes as $class){
            echo $class . "<br>";
        }








		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>