
<html>
<head>
    <style >
    #rahul{
        margin-left: 475px;
    }
    </style>
</head>
<body>    
<?php
$q= ($_GET['r']);
$id=($_GET['s']);
Include('connect.php');
echo '<div id=rahul>';
  echo '<img src="eVoteLogoMain.png"/>';
  echo '<br><br>';
$query3=mysql_query("SELECT * FROM voter where vid='".$id."'");
$row = mysql_fetch_assoc($query3) ;
if ($row['voted']==0){
$query = mysql_query("SELECT * FROM candidate where cid='".$q."'");
$row1 = mysql_fetch_assoc($query) ;
echo '<img src="correct.jpeg"/>';
echo '<br>';
echo '<strong>You have voted ' . $row1['cname'] . ' belonging to party ' . $row1['cparty'] . '</strong>';
$x=$row1['num_of_votes'];
$z=$x+1;
$y=1;
$query1=mysql_query("UPDATE candidate SET num_of_votes=$z WHERE cid='".$q."'");
$query2=mysql_query("UPDATE voter SET voted=$y WHERE vid='".$id."'");
}
else{
echo '<img src="sad.jpeg"/>';
echo '<br>';
    echo '<strong>Sorry!You have already voted once!</strong>';
}
?>
</body>
</html>