<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 400px;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
#rahul{
    margin-left: 400px;
}
</style>
</head>
<body>

<?php
$q = $_GET['r'];
$y=$_GET['s'];
Include('connect.php');
$query =mysql_query("SELECT * FROM voter WHERE vid = '".$y."'");
$sql="SELECT * FROM candidate WHERE cid = '".$q."'";
$result = mysql_query($sql);
$row1=mysql_fetch_array($query);
echo '<div id=rahul>';
echo '<img src="eVoteLogoMain.png"/>';
echo '<br>';
echo '<strong>Candidate Info</strong>';
echo '<br><br>';
echo "<table>
<tr>
<th>Name</th>
<th>Region</th>
<th>Party</th>
<th>Why should you vote me?</th>
</tr>";
while($row = mysql_fetch_array($result)) {

    echo "<tr>";
    echo "<td>" . $row['cname'] . "</td>";
    echo "<td>" . $row['cregion'] . "</td>";
    echo "<td>" . $row['cparty'] . "</td>";
    echo "<td>" .$row['info']."</td>";
    echo "</tr>";
}
echo "</table>";
echo '<input type="button" name="Back1" value="Go Back" onclick="window.location =\'ajax.php?f=' . $row1['vregion'] . '&g=' . $y . '\'" />';
echo '</div>';
?>
</body>
</html>