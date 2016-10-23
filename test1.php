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
<?php
$a=$_GET['z'];
Include('connect.php');
echo '<div id=candy>';
echo '<img src="eVoteLogoMain.png"/>';
echo '<br><br>';
echo '<strong>Voter status in your Region</strong>';
echo '<br><br>';
echo "<table><tr>
<th>Total voters</th>
<th>Voted</th>
<th>Not Voted</th>
</tr>";

	echo "<tr>";
	echo "<td>" .mysql_num_rows(mysql_query("SELECT * FROM voter where vregion='$a'"))."</td>";
	echo "<td>" .mysql_num_rows(mysql_query("SELECT * FROM voter where vregion='$a'  and voted = 1 ")). "</td>";
    echo "<td>" .mysql_num_rows(mysql_query("SELECT * FROM voter where vregion='$a' and voted = 0 " )). "</td>";
    echo "</tr>";
echo '</table>';
echo '</div>';

?>
</body>
</html>