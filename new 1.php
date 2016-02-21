
<?php 

 class User
 {
	 public $name;
 
 }
 
   $examp = new User();
   
   $examp->name = 1;
   $examp2 = $examp;
   $examp2 ->name = 2;
   
   echo $examp->name;
   echo $examp2->name;