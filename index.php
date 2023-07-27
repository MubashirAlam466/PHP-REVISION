<?php

echo "<br>";

$Name = "Mubashir Alam";
$Fname = "Muhammad Alam";
$Contact = "03460315462";
$Address = "North Nazimabad Karachi";
echo "My Name Is : $Name <br> My Father Name IS : $Fname <br>
      Contact No : $Contact <br> Address : $Address  <br>";

     echo "<br>";
     echo "<br>";

$num = 550;
$num1 = 550;
$Sum = $num+$num1;
$Subtraction = $num-$num1;
$Multiple = $num*$num1;
$Division = $num/$num1;
echo "A Value Of Is Sum : $Sum <br> A Value Of Is Subtraction : $Subtraction <br>
      A Value Of Is Multiple : $Multiple <br> A Value Of Is Division : $Division <br> ";

    //   A variable in PHP is the name of the memory location that holds data. In PHP,
    //   a variable is declared using the $ sign followed by the variable name. 
    //   The main way to store information in the middle of a PHP program is by using a variable.
    //   I Am Working On PHP Variable Date Is : 25/07/2023 And Time Is : 2:00 Am  And Day Is Tuesday !!!

    echo "<br>";
    echo "<br>";

$x = 245;
$y = 455;
echo "This Operator  Is Sum : " . $x + $y . "<br>" ;
echo "This Operator  Is Subtraction : " . $x - $y . "<br>" ;
echo "This Operator  Is Multiple : " . $x * $y . "<br>" ;
echo "This Operator  Is Division : " . $x / $y . "<br>" ;

    //  PHP Operator is a symbol i.e used to perform operations on operands. In simple words,
    //  operators are used to perform operations on variables or values. For example: $num=10+20;
    //  + is the operator and 10,20 are operands.
    //   I Am Working On PHP Variable Date Is : 25/07/2023 And Time Is : 2:00 Am  And Day Is Tuesday !!!

    echo "<br>";
    echo "<br>";

$age = 18;

if($age >17){
    echo "Your Are Not Eligible Driving Car Sorry";
}
elseif($age >15){
    echo "Your Are Not Eligible Driving Car Sorry";
}
elseif($age >13){
    echo "Your Are Not Eligible Driving Car Sorry";
}
elseif($age >12){
    echo "Your Are Not Eligible Driving Car Sorry";
}
else{
    echo "Your Are Eligible Driving Car";
}

    echo "<br>";
    // echo "<br>";

if($age <25){
    echo "Your Are Eligible Driving Car";
}
elseif($age <22){
    echo "Your Are Eligible Driving Car";
}
elseif($age <20){
    echo "Your Are Eligible Driving Car";
}
elseif($age <18){
    echo "Your Are Eligible Driving Car";
}
else{
    echo "Your Are Not Eligible Driving Car Sorry";
}

    // It executes one block of code if the specified condition is true and another block of code
    // if the condition is false. Syntax. if(condition){ code to be executed if true. }else{

        echo "<br>";
        echo "<br>";

$Marksheet = 40;

if($Marksheet >32){
    echo "You Are  Semester Is Pass Congratulation";
}
elseif($Marksheet >30){
    echo "You Are  Semester Is Pass Congratulation";
}
elseif($Marksheet >25){
    echo "You Are  Semester Is Pass Congratulation";
}
elseif($Marksheet >20){
    echo "You Are  Semester Is Pass Congratulation";
}else{
    echo "You Are  Semester Is Failed ";
}

        echo "<br>";
        // echo "<br>";

if($Marksheet <32){
    echo "You Are  Semester Is Pass Congratulation";
}
elseif($Marksheet <33){
    echo "You Are  Semester Is Pass Congratulation";
}
elseif($Marksheet <25){
    echo "You Are  Semester Is Pass Congratulation";
}
elseif($Marksheet <20){
    echo "You Are  Semester Is Pass Congratulation";
}else{
    echo "You Are  Semester Is Failed ";
}

    //   It executes one block of code if the specified condition is true and another block of code
    //   if the condition is false. Syntax. if(condition){ code to be executed if true. }else{
    //   I Am Working On PHP if & elseif & else Statments Date Is : 27/07/2023 And Time Is : 2:35 Am  And Day Is Thursday !!!

        echo "<br>";
        echo "<br>";

$age = 16;
switch($age){
    case 22:
    echo "Your Are 22 Years Old Boy <br>";
        break;

    case 20:
    echo "Your Are 20 Years Old Boy <br>";
        break;

    case 18:
    echo "Your Are 18 Years Old Boy <br>";
        break;

    case 17:
    echo "Your Are 17 Years Old Boy <br>";
        break;

default:
    echo "Your Age Is Weird <br>";
    break;
}

        // Switch case in PHP are control structures that allow the programmer to execute
        // different blocks of code based on the value of a variable or expression. This
        // can be particularly useful when dealing with complex conditional statements or
        // when multiple conditions must be evaluated.

        echo "<br>";
        // echo "<br>";

    $i = 1;
    while($i<6){
        echo "This Value IS : ";
        echo $i++;
        echo "<br>";
        // echo $i++;
    }

        // The meaning of a while statement is simple. It tells PHP to execute 
        // the nested statement(s) repeatedly, as long as the while expression evaluates to true .

        echo "<br>";
        // echo "<br>";

for ($i=1; $i<6 ; $i++) { 
    echo "<br>";
    echo "This Value IS : $i ";
}

echo "<br>";

for ($i=1; $i < 30; $i+=2) { 
    echo "This Value IS : $i <br>";
    
}

    // For loop is a control structure that repeats a block of code as long as a condition is met.
    // It's usually used to repeat a block of code a certain number of times. The PHP for loop function
    // can be used to iterate over a set of code for a set number of times.

    echo "<br>";
    // echo "<br>";

$a = 1;
do {
    echo "This Value IS : $a <br>";
    $a++;
} while ($a <5);

    // The do...while loop - Loops through a block of code once, and then
    // repeats the loop as long as the specified condition is true.
    // n 'while' loop the controlling condition appears at the start of the loop.
    // In 'do-while' loop the controlling condition appears at the end of the loop.
    // The iterations do not occur if, the condition at the first iteration, appears false

    echo "<br>";
    // echo "<br>";

$arr = array ("MotherBoard","Processro","RAM","SSD","HDD","GraphicCard","PowerSupplay","LCD & Mouse/KeyBoard");
foreach ($arr as $value) {
    echo "$value <br>";
}

    // A for-each loop is a loop that can only be used on a collection of items.
    // It will loop through the collection and each time through the loop it will
    // use the next item from the collection. It starts with the first item in the array
    // (the one at index 0) and continues through in order to the last item in the array.

    echo "<br>";
    // echo "<br>";




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP REVISION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>