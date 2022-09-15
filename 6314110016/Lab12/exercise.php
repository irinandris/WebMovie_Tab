<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irin Andris 6314110016</title>
<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "contact";
$con = mysqli_connect($host, $username, $password)
    or die("cannot connect");
mysqli_select_db($con, $db_name) or die("cannot select DB");
$sql = "select * from person";
$result = mysqli_query($con, $sql);
$json = array();
if ($result = mysqli_query($con, $sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $row_array['FistName'] = $row['FistName'];
        $row_array['LastName'] = $row['LastName'];
        $row_array['Email'] = $row['Email'];
        $row_array['Tel'] = $row['Tel'];
        array_push($json, $row_array);
    }
}
mysqli_close($con);
$myjson = json_encode($json, TRUE);
echo $myjson;
?>
</head>
<body>
    <h3 style="color: blue">Database Query Results</h3>
    <table border="1" cellpadding="3" cellspacing="2" style="background-color: #ADD8E6">
        <thead>
            <tr>
                <th>FistName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Tel</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $json_decoded = json_decode($myjson);
            foreach ($json_decoded as $result) {
                echo '<tr>';
                echo '<td>' . $result->FistName . '</td>';
                echo '<td>' . $result->LastName . '</td>';
                echo '<td>' . $result->Email . '</td>';
                echo '<td>' . $result->Tel . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <p><a href="index12.html">Back</a></p>
</body>

</html>