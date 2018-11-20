<?php
/**
 * Created by PhpStorm.
 * User: Mahfuz
 * Date: 20-Nov-18
 * Time: 12:01 PM
 */



class Cars{



}


$my_classes = get_declared_classes(); // getting all automatic defined declared php class

foreach ($my_classes as $class){
    echo $class ."<br>";
}



?>