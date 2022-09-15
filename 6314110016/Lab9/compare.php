<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <!-- Fig. 26.7: compare.php -->
<!-- String Comparison -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Irin Andris 6314110016</title>
</head>

<body>
    <?php

    // create array fruits 
    $fruits = array("apple", "orange", "banana");

    // iterate through each array element 
    for ($i = 0; $i < count($fruits); $i++) {

        // call function strcmp to compare the array element 
        // to string "banana" 
        if (strcmp($fruits[$i], "banana") < 0)
            print($fruits[$i] . " is less than banana ");
        print($fruits[$i] . " is equal to banana ");

        // use relational operators to compare each element 
        // to string "apple" 
        if ($fruits[$i] < "apple")
            print("and less than apple! <br />");
        elseif ($fruits[$i] > "apple")
            print("and greater than apple! <br />");
        elseif ($fruits[$i] == "apple")
            print("and equal to apple! <br />");
    }
    ?>
    <p><a href="index9.html">Back</a></p>
</body>

</html