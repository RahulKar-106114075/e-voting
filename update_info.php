<html>
<head>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<style>
#rahul{
	margin-left: 450px;
	width:300px;
	font-size: 20px;
}
</style>
</head>
<body>
<?php
$id=($_GET['r']);
Include('connect.php');
$z= ($_REQUEST['info']);
$query = mysql_query("SELECT * FROM candidate where cid='$id'");
$row = mysql_fetch_array($query) ;
	 if($row['info']==null){
	 $query1=mysql_query("UPDATE candidate SET info='$z' WHERE cid='$id'");
	 }
	 else{
	 	$y=$row['info'].' '.$z;
	 	$query1=mysql_query("UPDATE candidate SET info='$y' WHERE cid='$id'");
	 }
	 echo '<div id="rahul">';
	 echo '<img src="thumbs-up.jpg"/>';
	 echo '<br><br>';
	 echo '<strong>Your info has been updated.</strong>';
	 echo '<button class="btn btn-lg btn-primary btn-block" onclick="location.href =\'clogin.html\'">Go Back</button>'; 
	 echo '</div>';

?>
</body>
</html>