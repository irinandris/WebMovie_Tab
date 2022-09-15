<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irin Andris 6314110016</title>
</head>

<body style="font-family: arial, sans-serif">
    <p>
        <strong>
            The following data is saved in a cookie on your
            computer.
        </strong>
    </p>
    <table border="5" cellspacing="0" cellpadding="10">
        <?php

        // iterate through array $_COOKIE and print
        // name and value of each cookie
        foreach ($_COOKIE as $key => $value)
            print("<tr>
    <td bgcolor=\"#F0E68C\">$key</td>
    <td bgcolor=\"#FFA500\">$value</td>
    </tr>");
        ?>
    </table>
    <p><a href="index10.html">Back</a></p>
</body>

</html>