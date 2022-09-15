<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <!-- Fig. 26.6: arrays.php -->
<!-- Array manipulation -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Irin Andris 6314110016</title>
</head>

<body>
    <?php

    // create array first 
    print("<strong>Creating the first array</strong> 
 <br />");
    $first[0] = "zero";
    $first[1] = "one";
    $first[2] = "two";
    $first[] = "three";

    // print each element’s index and value 
    for ($i = 0; $i < count($first); $i++)
        print("Element $i is $first[$i] <br />");

    print("<br /><strong>Creating the second array 
 </strong><br />");

    // call function array to create array second 
    $second = array("zero", "one", "two", "three");
    for ($i = 0; $i < count($second); $i++)
        print("Element $i is $second[$i] <br />");

    print("<br /><strong>Creating the third array 
 </strong><br />");

    // assign values to non-numerical indices 
    $third["ArtTic"] = 21;
    $third["LunaTic"] = 18;
    $third["GalAnt"] = 23;

    // iterate through the array elements and print each 
    // element’s name and value 
    for (
        reset($third);
        $element = key($third);
        next($third)
    )
        print("$element is $third[$element] <br />");
    print("<br /><strong>Creating the fourth array 
 </strong><br />");

    // call function array to create array fourth using 
    // string indices 
    $fourth = array(
        "January" => "first", "February" => "second",
        "March" => "third", "April" => "fourth",
        "May" => "fifth", "June" => "sixth",
        "July" => "seventh", "August" => "eighth",
        "September" => "ninth", "October" => "tenth",
        "November" => "eleventh", "December" => "twelfth"
    );

    // print each element’s name and value 
    foreach ($fourth as $element => $value)
        print("$element is the $value month <br />");
    ?>
    <p><a href="index9.html">Back</a></p>
</body>
</htm