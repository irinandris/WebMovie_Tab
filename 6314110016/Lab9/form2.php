<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<!-- Fig. 26.14: form.php -->
<!-- Read information sent from form.html -->  <html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Irin Andris 6314110016</title>
</head>


<body style="font-family: arial,sans-serif">
    <?php
        error_reporting(0);
        // determine whether phone number is valid and print 
        // an error message if not 
        if (!preg_match("/^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$/",
            $phone));
         {

            print("<p><span style = \"color: red; 
                    font-size: 2em\"> 
                    INVALID PHONE NUMBER</span><br /> 
                    A valid phone number must be in the form 
                    <strong>(555)555-5555</strong><br /> 
                    <span style = \"color: blue\"> 
                    Click the Back button, enter a valid phone 
                    number and resubmit.<br /><br /> 
                    Thank You.</span></p></body></html><br/><p><a href=index9.html>Back</a></p>");

            die(); // terminate script execution 
        }
        ?>

    <p>Hi
        <span style="color: blue">
            <strong>
                <?php print("$fname"); ?>
            </strong>
        </span>.
        Thank you for completing the survey.<br />

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
            <td bgcolor="#ffffaa">Name </td>
            <td bgcolor="#ffffbb">Email</td>
            <td bgcolor="#ffffcc">Phone</td>
            <td bgcolor="#ffffdd">OS</td>
        </tr>

        <tr>
            <?php

            // print each form field’s value 
            print("<td>$fname $lname</td> 
                    <td>$email</td> 
                    <td>$phone</td> 
                    <td>$os</td>");
            ?>
        </tr>
    </table>

    <br /><br /><br />
    <div style="font-size: 10pt; text-align: center">
        This is only a sample form.
        You have not been added to a mailing list.
    </div>
    
</body>
</htm