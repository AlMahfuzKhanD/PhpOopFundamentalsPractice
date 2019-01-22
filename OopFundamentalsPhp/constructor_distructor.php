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
            public $wheels = 4;
           static $doors = 6;



            function __construct(){

echo $this->wheels;
echo self::$doors++;



            }//constructor does not need to call. It is called automatically

            function __desstruct(){

                echo $this->wheels;
                echo self::$doors--;



            }//it has rare use


        }
        $bmw = new Cars();
        echo "<br>";
        $mercedes = new Cars();
        echo "<br>";
        $toyota = new Cars();

















		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>