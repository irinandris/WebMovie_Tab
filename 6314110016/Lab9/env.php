<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <!-- Fig. 26.11: env.php -->
<!-- Program to display environment variables -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Irin Andris 6314110016</title>
</head>

<body>
    <table border ="0" cellpadding="2" cellspacing="0" width="100%">
        <?php

        // print the key and value for each element 
        // in the $_ENV array 
        foreach (getenv() as $key => $value)
            print("<tr><td bgcolor = \"#11bbff\"> 
 <strong>$key</strong></td> 
 <td>$value</td></tr>");
        ?>
         <p><a href="index9.html">Back</a></p>
    </table>
</body>

</html