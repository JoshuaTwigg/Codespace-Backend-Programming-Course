<?php
// Task 1 //
$fruitVeg = ["orange","apple","carrot","peas","melon"];

print $fruitVeg[0];
print $fruitVeg[4];

array_push($fruitVeg, "pear");
array_shift($fruitVeg);

print $fruitVeg[0];
print $fruitVeg[4];



$insert = ["mango","banana","apricot"];

array_splice($fruitVeg,2,2,$insert);

print $fruitVeg[1]; 
print $fruitVeg[2]; 
print $fruitVeg[3];
print $fruitVeg[4];


sort($fruitVeg);


$string = implode(",",$fruitVeg);
print $string;

print_r($fruitVeg);






// TASK 2 //

print "<br>";

$me = ['age'=> 21,'height'=> "6meters",'shoe'=> 8 ];

print $me['age'];
print $me['height'];
print $me['shoe'];


$me['height']= 6.10;

print $me['height'];

$me['age'] = 19;

print $me['age'];

// Task 3 //


print "<br>";
$one = ['age'=> 21,'height'=> "6met",'shoe'=> 8 ];
$two = ['age'=> 21,'height'=> "6met",'shoe'=> 8 ];




$class =[['age'=> 21,'height'=> "6met",'shoe'=> 8 ],['age'=> 221,'height'=> "62met",'shoe'=> 812 ]];

print $class[0][1];
print $class[1][1];

?>

