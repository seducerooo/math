<?php declare(strict_types = 1); ?>
<?php include_once('./includes/header.php'); ?>
<?php include_once('./includes/autoloader.inc.php');  ?>

<?php

   $number1 = $_POST['num1'];
   $operation = $_POST['oper'];
   $number2 = $_POST['num2'];
   $calculator = new Calc((int)$number1,$operation,(int)$number2);
   
   try{
        echo $calculator->operation();
   }
   catch( TypeError $e){
       $e->getMessage();
   }  


?>



<?php include_once('includes/footer.php'); ?>