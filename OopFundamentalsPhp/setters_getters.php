<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo:


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		  Step4: Make a constant and set it to the value of PHP. and use an echo to print it out


			

			 */

		//class access Modifier

        class Cars{

            private $door_count = 6;




             function get_values(){


echo $this->door_count;




            }

             function set_values(){


            $this->door_count = 10 ;




            }


        }

        $bmw = new Cars();
        $bmw->set_values();
        $bmw->get_values();















		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>