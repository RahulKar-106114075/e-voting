<html>
<head>
	<style>
	#candy{
		margin-left:400px;

	}
	table{
		width:400px;
		border-collapse: collapse;
	}
	table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}

	</style>
</head>	
<body>
<?php // content="text/plain; charset=utf-8"

$a=$_GET['r'];

Include('connect.php');
echo '<div id=candy>';
  echo '<img src="eVoteLogoMain.png"/>';
  echo '<br>';
  echo '<strong>Candidate status in your Region</strong>';
  echo '<br><br>';
 echo "<table>
<tr>
<th>Name</th>
<th>Party</th>
<th>Votes</th>

</tr>";
$query = "SELECT cname, cparty,num_of_votes FROM candidate where cregion='$a';";
$result = mysql_query($query);

while( $row1 = mysql_fetch_assoc($result) ){
	echo "<tr>";
	echo "<td>" . $row1['cname'] . "</td>";
    echo "<td>" . $row1['cparty'] . "</td>";
    echo "<td>" . $row1['num_of_votes'] . "</td>";
    echo "</tr>";
}

echo '</table>';
echo '</div>';
?>
</body>
</html>