<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irin Andris 6314110016</title>
</head>

<body style="font-family: arial,sans-serif">
    <?php
    error_reporting(0);
    extract($_POST);
    if (!preg_match("/^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$/", $PHONE)) {
        print("<p><span style = \"color: red;
 font-size: 2em\">
 INVALID PHONE NUMBER</span><br />
 A valid phone number must be in the form
 <strong>(555)555-5555</strong><br />
 <span style = \"color: blue\">
 Click the Back button, enter a valid phone
 number and resubmit.<br /><br />
 Thank You.</span></p></body></html><br><p><a href=index9.html>Back</a></p>");
 

        die();
    }
    ?>
    <p>Hi
        <span style="color: blue">
            <strong>
                <?php print("$USERNAME"); ?>
            </strong>
        </span>.
        Thank you for completing the survey.<br />
        You have been added to the
        <span style="color: blue">
            <strong>
                <?php print("$book "); ?>
            </strong>
        </span>
        mailing list.
    </p>
    <strong>The following information has been saved
        in our database:</strong><br />
    <table border="0" cellpadding="0" cellspacing="10">
        <tr>
            <td bgcolor="#ffffaa">NAME </td>
            <td bgcolor="#ffffbb">ID</td>
            <td bgcolor="#ffffcc">PHONE</td>
            <td bgcolor="#ffffdd">GROUP</td>
            <td bgcolor="#ffffdd">BRANCH</td>
            <td bgcolor="#ffffdd">SUBJECT</td>
        </tr>

        <tr>
            <?php
            print("<td>$USERNAME $LASTNAME</td>
         <td>$ID</td>
         <td>$PHONE</td>
         <td>$GROUP</td>
         <td>$BRANCH</td>
         <td>$SUBJECT</td>");
            ?>
        </tr>
    </table>

    <br /><br /><br />
    <div style="font-size: 10pt; text-align: center">
        This is only a sample form.
        You have not been added to a mailing list.
    </div>
    <p><a href="index9.html">Back</a></p>
</body>

</html>