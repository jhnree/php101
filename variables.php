<?php
// int a = 1;
// var b = 1;

$a = '1';
$b = 2;
$c = $a + $b;

echo 'The total is equal to $c';

define('SAMPLE', 5);

function myTest() {
    // using x inside this function will generate an error
    // $x = 1;
    echo "<p>Variable x inside function is: "+ SAMPLE+ "</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

print("<h2>PHP is Fun!</h2>");

// var_dump();print_r(); arrays

var_dump("The total is equal to $c");

$arr= array('one', 'two', 'three');
$arr= ['one', 'two', 'three'];
$arr[]['ssdf'] = 'sdf';
echo "<pre>";
var_dump($arr);

class Car {
    public $vroom1 = 'hi';
    function vroom() {
        
        return $this->vroom1 . "VW";
    }
}

$class = new Car;
echo $class->vroom();



$m = '1,2,3,4';

print_r(explode(',', $m));

$arr= [
        'one' => '1', 
        'two' => '2', 
        'three' => '3'
];
foreach($arr as $key => $value){
    echo $key." = ".$value."<br>";
}