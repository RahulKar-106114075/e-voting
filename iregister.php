<?php
Include('connect.php');
If($_REQUEST['Name']=='' || $_REQUEST['Id']=='' ||$_REQUEST['Region']==''|| $_REQUEST['password']==''|| $_REQUEST['repassword']=='')
{
	echo '<script type="text/javascript">'; 
	echo 'alert("Please fill in the empty field(s)");'; 
	echo 'window.location.href = "ireg.html";';
	echo '</script>';
}
Else
{
$sql="insert into inspector(eid,ename,eregion,ipasswd) values('".$_REQUEST['Id']."', '".$_REQUEST['Name']."',  '".$_REQUEST['Region']."', '".$_REQUEST['password']."')";
$res=mysql_query($sql);
If($res)
{
header("Location: ilogin.html");
}
Else
{

header("Location:ireg.html");
}

}


?>
