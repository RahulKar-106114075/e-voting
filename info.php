<html>
<head>
	<style>
	#candy{
		margin-left:400px;
	}
	</style>
</head>
<body>	
<?php
$w= ($_GET['q']);
Include('connect.php');

echo '<div id=candy>';
echo '<img src="eVoteLogoMain.png"/>';
echo '<br>';
echo '<strong>Candidate status in your Region</strong>';
echo '<br><br>';

echo '<input type="button" name="Back1" value="Candidate" onclick="window.location =\'test.php?r='.$w.'\'" />';
echo '<br><br>';
echo '<input type="button" name="Back1" value="Voter" onclick="window.location =\'test1.php?z='.$w.'\'" />';
echo '</table>';
echo '</div>';
?>
</body>
</html>