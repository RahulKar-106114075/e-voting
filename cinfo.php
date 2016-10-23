<html>
<head>
	<style>
		#candy{
			margin-left: 450px;
		}
	</style>
</head>	
<body>
<html>
<head>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<style>
#candy{
	margin-left: 450px;
	width:300px;
	font-size: 20px;
}
</style>	
</head>

<body>
<?php
$a=$_GET['r'];
Include('connect.php');
$query=mysql_query("SELECT * FROM candidate where cid=$a");
$row =mysql_fetch_assoc($query);
echo '<div id=candy>';
echo '<img src="eVoteLogoMain.png"/>';
echo '<br>';
echo '<strong>Update Info about yourself</strong>';
echo '<br><br>';
echo '<form action="update_info.php?r='.$a.'" method="post">';
echo '<p>Name:'.$row['cname'].'<br /></p>';
echo '<p>Party:'.$row['cparty'].'<br /></p>';
echo '<p>Region:'.$row['cregion'].'<br /></p>';
echo '<p>Info:<br /><input type="text" name="info" /></p>';
echo '<button class="btn btn-lg btn-primary btn-block" onclick="location.href =\' update_info.php?r='.$a.'\'">Submit</button>';
echo '</form>';
echo '</div>';
?>
</body>
</html>