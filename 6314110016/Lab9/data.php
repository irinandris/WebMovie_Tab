<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <!-- Fig. 26.3: data.php -->
<!-- Demonstration of PHP data types -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Irin Andris 6314110016</title>
</head>

<body>

    <?php

    // decre a string, double and integer 
    $testString = "3.5 seconds";
    $testDouble = 79.2;
    $testInteger = 12;
    ?>
    <!-- print each variable’s value -->
    <?php print($testString); ?> is a string.<br />
    <?php print($testDouble); ?> is a double.<br />
    <?php print($testInteger); ?> is an integer.<br />

    <br />
    Now, converting to other types:<br />
    <?php

    // call function settype to convert variable 
    // testString to different data types 
    print("$testString");
    settype($testString, "double");
    print(" as a double is $testString <br />");
    print("$testString");
    settype($testString, "integer");
    print(" as an integer is $testString <br />");
    settype($testString, "string");
    print("Converting back to a string results in 
 $testString <br /><br />");

    $data = "98.6 degrees";

    // use type casting to cast variables to a 
    // different type 
    print("Now using type casting instead: <br /> 
 As a string - " . (string) $data .
        "<br />As a double - " . (float) $data .
        "<br />As an integer - " . (int) $data);
    ?>
     <p><a href="index9.html">Back</a></p>
</body>

</html>