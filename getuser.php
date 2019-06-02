<!DOCTYPE html>
<html>
<head>
<style>
table {
    margin-left: 15%;
    width: 70%;
    border-collapse: collapse;
}

table, td, th {
    border: 3px solid black;
    padding: 5px;
}

th {
    text-align: left;
}
</style>r
</head>
<body>

<?php

$connect = mysqli_connect('localhost','root','root','piproject');
if (!$connect) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($connect,"ajax_demo");
$query="SELECT * FROM signuptable";
$res = mysqli_query($connect,$query);

echo "<table>
<tr>
<th>ID</th>
<th>Emri</th>
<th>Mbiemri</th>
<th>Gjinia</th>
<th>Datelindja</th>
<th>Email</th>
<th>Password</th>
</tr>";
while($index = mysqli_fetch_array($res)) {
    echo "<tr>";

    echo "<td>" . $index['ID'] . "</td>";
    echo "<td>" . $index['Emri'] . "</td>";
    echo "<td>" . $index['Mbiemri'] . "</td>";
    echo "<td>" . $index['Gjinia'] . "</td>";
    echo "<td>" . $index['Datelindja'] . "</td>";
    echo "<td>" . $index['Email'] . "</td>";
    echo "<td>" . $index['Password'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($connect);
?>
</body>
</html>