
<html>
<head>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<style>
#rahul{
  margin-left:475px; 
  font-size: 25px;
}
table {
    width: 100px;
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

  $q= ($_GET['f']);
  $q1=($_GET['g']);

Include('connect.php');
		
	$query = "SELECT * FROM candidate where cregion='".$q."'"; //You don't need a ; like you do in SQL
	$result = mysql_query($query);
	$x=0;
 
 echo '<div id=rahul>';
  echo '<img src="eVoteLogoMain.png"/>';
  echo '<br>';
  echo '<strong>Vote your Favourite candidate</strong>';
  echo '<br><br>';
 echo "<table>
<tr>
<th>Name</th>
<th>Party</th>
<th>Vote</th>
<th>Info</th>
</tr>";
        while( $row1 = mysql_fetch_assoc($result) ){
           $x=$x+1;
           $y=$row1['cid'];
           
         	
        
         //echo '<a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-user"></i></a>';

          echo "<tr>";
          //echo "<td>".'<a href="http://www.jquery2dotnet.com"><i class="glyphicon glyphicon-user"></i></a>'."</td>";
          echo "<td>" . $row1['cname'] . "</td>";
          echo "<td>" . $row1['cparty'] . "</td>";
          echo "<td>".'<input type="button" name="Back1" value="Vote" onclick="window.location =\'vote.php?r=' . $y . '&s=' . $q1 . '\'" />'."</td>";
          echo "<td>".'<input type="button" name="Back2" value="Check Info" onclick="window.location =\'candidate.php?r=' . $y . '&s=' . $q1 . '\'" />'."</td>";
          echo "</tr>";


}
echo "</table>";
echo '</div>'
?>
</body>
</html>
