<?php

#Create a function that takes two numbers as arguments and returns their sum.

echo "<pre>";
echo sum(2, 3) . "<br>"; // ➞ 5
function sum($num1, $num2)
{

    $sum = $num1 + $num2;

    return $sum;
}
/*
Create a function that takes a number as an argument,
 increments the number by +1 and returns the result. 
 */
echo increment(5) . "<br>";
function increment($num)
{

    return $num + 1;
}

#Write a function that takes an integer minutes and converts it to seconds.
echo converet(5) . "seconds" . "<br>";
function converet($minutes)
{
    return $minutes * 60;
}

#Write a function that takes the base and height of a triangle and return its area.
echo triangle_area(25, 30) . "<br>";
function triangle_area($base, $hight)
{
    return 0.5 * $base * $hight;
}

#Create a function that finds the maximum range of a triangle's third edge, where the side lengths are all integers.
echo next_edge(5, 8) . "<br>";
function next_edge($side1, $side2)
{
    return ($side1 + $side2) - 1;
}

#Write a function that returns the string "something" joined with a space " " and the given argument a.

echo give_me_somthing("is better than nothing") . "<br>";
function give_me_somthing($a)
{

    return "somthing" . "  " . $a;
}

#Create a function that takes an array containing only numbers and return the first element.

echo git_first_element([1, 2, 3]) . "<br>";
function git_first_element($arr)
{
    return $arr[0];
}

#Write a function that converts hours into seconds.
echo how_many_seconds(5) . "seconds" . "<br>";
function how_many_seconds($hours)
{
    return $hours * 3600;
}

#Create a function that takes a number as its only argument and returns true if it's less than or equal to zero, otherwise return false.

echo less_than_or_equal_to_zero(0) . "<br>";
function less_than_or_equal_to_zero($num)
{
    return $num <= 0 ? true : false;
}

/*
in this challenge, a farmer is asking you to tell him how many legs can be counted among all his animals. The farmer breeds three species:
chickens = 2 legs
cows = 4 legs
pigs = 4 legs
The farmer has counted his animals and he gives you a subtotal for each species. You have to implement a function that returns the total number of legs of all the animals.
*/
echo animals(2, 3, 5) . "<br>";
function animals($chickens, $cows, $pigs)
{
    return ($chickens * 2) + ($cows * 4) + ($pigs * 4);
}

/*
There is a single operator in PHP, 
capable of providing the remainder of a division operation.
 Two numbers are passed as parameters.
  The first parameter divided by the second parameter will have a remainder, 
  possibly zero. Return that value.
*/
echo remainder(5, 3) . "<br>";
function remainder($x, $y)
{
    return $x % $y;
}

#Create a function that returns true if a string is empty and false otherwise.
echo is_empty("") . "<br>";
function is_empty($str)
{
    return $str == "" ? true : false;
}

#Create a function that takes the age in years and returns the age in days.

echo calc_age(30) . "<br>";
function calc_age($age)
{

    return $age * 360;
}

#Create a function that takes $length and $width and finds the perimeter of a rectangle.
echo find_perimeter(15, 30) . "<br>";
function find_perimeter($length, $width)
{

    return $perimeter = ($length + $width) * 2;
}

#Create a function that returns true if an integer is evenly divisible by 5, and false otherwise
echo divisibleByFive(10) . "<br>";
function divisibleByFive($number)
{
    return $number / 5 ? true : false;
}

#Given two strings, firstName and lastName, return a single string in the format "last, first".
echo concatName("yasmeen" ,"khaled") ."<br>" ;
function concatName($firstname , $lastname){

    return $firstname ." ". $lastname;

}

#Write two functions:
/*
toInt() : A function to convert a string to an integer.
toStr() : A function to convert an integer to a string.
*/
echo toInt("500") . "<br>";
function toInt(string $string){

    return intval($string);
}
#-------
echo toStr(500). "<br>" ;
function toStr(int $integer){
    return strval($integer);
}/*  echo gettype(strval(500)); */

#Create a function that takes an integer and returns true if it's divisible by 100, otherwise return false.
echo divisible(100)."<br>";
function divisible($int){
    return $int/100 ? true : false ;
}

/*
Create a function that takes three arguments prob, prize,
 pay and returns true if prob * prize > pay; otherwise return false.

To illustrate:

profitableGamble(0.2, 50, 9)
... should yield true, since the net profit is 1 (0.2 * 50 - 9), and 1 > 0.
*/
echo profitableGamble(0.2 , 50 , 9);
function profitableGamble($prob , $prize , $pay){
    return $prob * $prize > $pay ;
}


/*
Write a function to reverse an array.

Examples
reverse([1, 2, 3, 4]) ➞ [4, 3, 2, 1]
*/

print_r(reverse([1, 2, 3, 4])) ;
function reverse($arr){
   return array_reverse($arr);
}
/*
Create a function that takes the number of wins,
 draws and losses and calculates the number of points a football team has obtained so far.

wins get 3 points
draws get 1 point
losses get 0 points
Examples
footballPoints(3, 4, 2) ➞ 13
*/
echo footballPoints(9 , 7 , 4 )."points" ."<br>" ;
function footballPoints($wins , $draws , $losses){

    return ($wins * 3) + ($draws * 1) + ($losses * 0) ;
}


/*Write a function that takes two integers ($hours, $minutes),
 converts them to seconds, and adds them.

Examples
convert(1, 3) ➞ 3780
*/
echo convert(1 , 3)  ."seconds" . "<br>";
function convert($hours , $minutes, $seconds=60){
return ($hours * $seconds * $seconds) + ($minutes * $seconds);
}
/*
Create a function that takes a string and returns it as an integer.

Examples
string_int("6") ➞ 6
*/
echo string_int("6") ."<br>";
function string_int($str){
    return intval($str);
}
/*You are counting points for a basketball game,
 given the amount of 3-pointers scored and 2-pointers scored,
 find the final points for the team and return that value ([2 -pointers scored, 3-pointers scored]).

Examples
points(1, 1) ➞ 5
*/
echo points(3 , 1). "<br>";
function points($twopoints , $thirspoints){
    return ($twopoints * 2) + ($thirspoints * 3) ;
}

/*Create a function that takes an array and returns the sum of all numbers in the array.

Examples
getSumOfItems([2, 7, 4]) ➞ 13
*/
echo getsumofitem([5 , 7 , 8 , 2]) . "<br>";
function getsumofitem($arra){
    return array_sum($arra) ;
}

/*
Create a function that takes a base number and an exponent number
 and returns the calculation.

Examples
calculateExponent(5, 5) ➞ 3125
*/
echo calculateExponent(3 , 2) . "<br>";
function calculateExponent($basenumber , $exponent){
    return $basenumber ** $exponent ;
}

/*
You hired three programmers and you (hopefully) pay them.
 Create a function that takes three numbers (the hourly wages of each programmer) 
 and returns the difference between the highest-paid programmer and the lowest-paid.

Examples
programmers(147, 33, 526) ➞ 493
*/
echo programmers(147 , 33 , 526) . "<br>" ;
function programmers($wages1 , $wages2 , $wages3){
    $max = max($wages1 , $wages2 , $wages3);
    $min = min($wages1 , $wages2 , $wages3); 
    return $max - $min ;
}




echo "</pre>";
