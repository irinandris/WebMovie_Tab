<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <!-- Fig. 26.4: operators.php -->
<!-- Demonstration of operators -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Irin Andris 6314110016</title>
</head>

<body>
    <?php
    error_reporting(0);
    $a = 5;
    print("The value of variable a is $a <br />");

    // define constant VALUE 
    define("VALUE", 5);

    // add constant VALUE to variable $a 
    $a = $a + VALUE;
    print("Variable a after adding constant VALUE 
23 is $a <br />");

    // multiply variable $a by 2 
    $a *= 2;
    print("Multiplying variable a by 2 yields $a <br />");

    // test if variable $a is less than 50 
    if ($a < 50)
        print("Variable a is less than 50 <br />");

    // add 40 to variable $a 
    $a += 40;
    print("Variable a after adding 40 is $a <br />");

    // test if variable $a is 50 or less 
    if ($a < 51)
        print("Variable a is still 50 or less<br />");

    // test if variable $a is between 50 and 100, inclusive 
    elseif ($a < 101)
        print("Variable a is now between 50 and 100, 
 inclusive<br />");
    else
        print("Variable a is now greater than 100 
 <br />");
    // print an uninitialized variable 
    print("Using a variable before initializing: 
 $nothing <br />");

    // add constant VALUE to an uninitialized variable 
    $test = $num + VALUE;
    print("An uninitialized variable plus constant 
56 VALUE yields $test <br />");

    // add a string to an integer 
    $str = "3 dollars";
    $a += $str;
    print("Adding a string to variable a yields $a 
 <br />");
    ?>
     <p><a href="index9.html">Back</a></p>
</body>

</html>