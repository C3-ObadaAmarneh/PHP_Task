<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_Task</title>
<style>
  h1 {color:black;
      text-align: center;}
</style>
</head>

<body>
    <!-- Pulse Check  -->

    <!-- Q1 + Q2  -->
    <h1> <?php echo("PHP_Task") ?>  </h1>

    <!-- Pulse Check end -->

    <!-- Practice -->

<!-- Q1: Write a function to calculate the  
factorial of a number (non-negative integer) -->

<?php
function factorial_of_a_number($number){
if($number >= 0){
    if($number === 0)
     { 
         return 1; 
     }else{   
         return $number * factorial_of_a_number($number-1);    
        }
}else{
    return "The Number Must be Positive";
}}
echo(factorial_of_a_number(4)." .");
?>

</br></br>

<!-- Q2: Write a function to reverse a string -->

<?php  
function reverse_string($string){
echo(strrev($string)." .");
}
echo(reverse_string("obada"))
?>  

</br></br>


<!-- Q3:Write a PHP script to that inserts a new item in an array in any position -->

<?php 
 function inserts($array, $position ,$number_of_splice,$inserted_value){
    echo ("Array Before Inserted Any Value : [" );
    $stop = 1;
    foreach($array as $n){
        if($stop !== count($array)){
            echo(" '$n',");
        }else{
            echo(" '$n'] .");
        }
        $stop++;
    }
echo nl2br("\n");
    array_splice($array, $position ,$number_of_splice,$inserted_value);
    echo("Array After Inserted Value '$inserted_value' : [");
    $stop = 1;
    foreach($array as $n){
        if($stop !== count($array)){
            echo(" '$n',");
        }else{
            echo(" '$n'] .");
        }
        $stop++;
    }
 }

inserts(['1','2','3','5'] , 3 , 0 , 4)
?> 

</br></br>

<!-- 4:Write a PHP script to sort an array using case-insensitive natural ordering -->

<?php
function sorting($array){
echo ("Array Before Sorted : [");
$stop = 1;
foreach ($array as $value) {
    if($stop !== count($array)){
        echo(" '$value',");
    }else{
        echo(" '$value'] .");
    }
    $stop++;
} 
    echo nl2br("\n");
sort($array,SORT_NATURAL | SORT_FLAG_CASE );
echo ("Array After Sorted : [");
$stop = 1;
foreach ($array as $value) {
    if($stop !== count($array)){
        echo(" '$value',");
    }else{
        echo(" '$value'] .");
    }
    $stop++;
  } 
}
sorting(['4','2','1','5','3'])
?>

</br></br>


<!-- 5:Write a PHP script to check the largest number among three integers -->

<?php
function largest($num1, $num2, $num3) {
  $max = $num1;
  $min = $num1;
  if ($num1 >= $num2 && $num1 >= $num3){
      $max = $num1;
      if($num2 > $num3){
        $min = $num3;
      }else{
        $min = $num2;
      }
  }
  if ($num2 >= $num1 && $num2 >= $num3){
      $max = $num2;
      if($num1 > $num3){
        $min = $num3;
      }else{
        $min = $num1;
      }
  }
  if ($num3 >= $num1 && $num3 >= $num2){
      $max = $num3;
      if($num1 > $num2){
        $min = $num2;
      }else{
        $min = $num1;
      }
  }
  
  echo("Largest number between $num1 , $num2 and $num3 is: $max  and lowest number is: $min ." );
  echo nl2br("\n");
}

largest(10, 5, 15);

largest(-100, -50 , 0 ,-25);
?>

</br>

<!-- 6:Write a PHP script to see if a year is a leap year or not -->

<?php
   function check_leap_year($year){
    if (($year%4 === 0) && ($year%100 !== 0) || ($year%400 ===0)){
        echo("This year '$year' its a leap year.");
    }else{
        echo("This year '$year' its not a leap year.");
    }
    echo nl2br("\n");
   }
   check_leap_year(2000);
   check_leap_year(2004);
   check_leap_year(2003);
?>

</br>

<!--  7:Write a PHP script using for loop to add all the integers between 0 and 30 and display the total  -->

<?php
function total_between($start,$end){
    $total =0;
    for($num = $start;  $num<$end; $num++){
        $total += $num;
    }
    echo("The Total between number $start to $end is: $total .");
    echo nl2br("\n");
}
total_between(0,30);
total_between(5,10);
total_between(5,6);
?>


</br></br>

<!-- 8:Write a PHP script that display 1-2-3-4-5-6-7-8-9-10 on one line, there will not be a hyphen in the starting anf ending position -->

<?php
function hyphen($start,$end){
    for($start = $start;  $start<=$end; $start++){
        if($start< $end){
        echo "$start-";
        }else{
        echo "$end";
         }
    }
    echo nl2br("\n");
}
hyphen(1,10);
hyphen(2,7);
?>

</br></br>

<!-- 9:Write a PHP script to get the first word of a sentence -->

<?php
function first_Word($sentence){
    echo(explode(' ',trim($sentence))[0]);
    echo nl2br("\n");
}
first_Word("My name is obada");
first_Word("The php is bad");
?>


<!-- 10:Write a PHP script to print letters from 'a' to 'z' -->
<!-- this is ascii code -->
<?php
// ord('a') in ascii code = 97 
// and but chr(number) to change it from number to value in ascii 
// like 97 ===> 'a' , 98 ===> 'b' .

for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x)."\t";
?>

</body>
</html>