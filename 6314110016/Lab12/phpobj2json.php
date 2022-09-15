<?php
$myObj1 = [
"name" => "John",
"age" => 30,
"city" => "New York",
];
$myJSON1 = json_encode($myObj1);
echo $myJSON1;
echo "<br>";
//$myArr =["John","Mary","Peter","Sally"];
$myArr =array("John","Mary","Peter","Sally");
$myJSON2 = json_encode($myArr);
echo $myJSON2;
?>
<p><a href="index12.html">Back</a></p>