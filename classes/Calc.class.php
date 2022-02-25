<?php
class Calc{

    public $num1;
    public $operation;
    public $num2;

    public function __construct(int $num1,$operation,int $num2){
       $this->num1 = $num1;
       $this->operation = $operation;
       $this->num2 = $num2;
    }



    public function operation(){
         switch ($this->operation) {
             case 'add':
             return $result = $this->num1 + $this->num2;
             break;

             case 'sub':
             return $result = $this->num1 - $this->num2;
             break;
             case 'div':
             return    $result = $this->num1 / $this->num2;
                break;
             case 'multy':
             return  $result = $this->num1 * $this->num2;
             break;
                    
             default:
             return    $result = "there is an error";
                 break;
         }
    }






}