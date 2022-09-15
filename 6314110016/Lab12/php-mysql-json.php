<html>

<head>
    <title>PHP Mysql Json HTML</title>
</head>
<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "Products";
$con = mysqli_connect($host, $username, $password)
    or die("cannot connect");
mysqli_select_db($con, $db_name) or die("cannot select DB");
$sql = "select * from Books";
$result = mysqli_query($con, $sql);
$json = array();
if ($result = mysqli_query($con, $sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $row_array['ID'] = $row['ID'];
        $row_array['Title'] = $row['Title'];
        $row_array['Category'] = $row['Category'];
        $row_array['ISBN'] = $row['ISBN'];
        array_push($json, $row_array);
    }
}
mysqli_close($con);
$myjson = json_encode($json, TRUE);
echo $myjson;
?>

<body>
    <h3 style="color: blue">
        Database Query Results</h3>
    <table border="1" cellpadding="3" cellspacing="2" style="background-color: #ADD8E6">
        <thead>
            <tr>
                <th>First</th>
                <th>Last</th>
                <th>Email</th>
                <th>Tel</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $json_decoded = json_decode($myjson);
            foreach ($json_decoded as $result) {
                echo '<tr>';
                echo '<td>' . $result->ID . '</td>';
                echo '<td>' . $result->Title . '</td>';
                echo '<td>' . $result->Category . '</td>';
                echo '<td>' . $result->ISBN . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <p><a href="index12.html">Back</a></p>
</body>

</html>