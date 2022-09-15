<?php 
// Fig. 26.21: cookies.php 
// Program to write a cookie to a client's machine 
error_reporting(0);
extract( $_POST ); 
// write each form field's value to a cookie and set the 
// cookie's expiration date 
setcookie( "Name", $NAME, time() + 60 * 60 * 24 * 5 ); 
setcookie( "Height" ,$HEIGHT, time() + 60 * 60 * 24 * 5 ); 
setcookie( "color", $COLOR, time() + 60 * 60 * 24 * 5 ); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns = "http://www.w3.org/1999/xhtml"> 
<head> 
<title>Cookie Saved</title> </head> 
<body style = "font-family: arial, sans-serif"> 
<p>The cookie has been set with the following data:</p> 
<!-- print each form field's value --> 
<br /><span style = "color: blue">Name: </span> 
<?php print($NAME ) ?><br /> 
<span style = "color: blue">Height:</span> 
<?php print( $HEIGHT ) ?><br /> 

<span style = "color: blue">Favorite color:</span>
<span style = "color: "><?php print($COLOR) ?>
</span><br />
<p>Click <a href = "readCookies.php">here</a> 
to read the saved cookie.</p> 
<p><a href="index10.html">Back</a></p>
</body> 
</html> 

