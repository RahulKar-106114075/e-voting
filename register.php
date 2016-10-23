<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.

If($_REQUEST['Name']=='' || $_REQUEST['Id']=='' ||$_REQUEST['Region']==''|| $_REQUEST['password']==''|| $_REQUEST['repassword']=='')
{
Echo "please fill the empty field.";
header("Location: register.html");
}
Else
{
$sql="insert into voter(vid,vname,vregion,voted,vpasswd) values('".$_REQUEST['Id']."', '".$_REQUEST['Name']."',  '".$_REQUEST['Region']."', 0 , '".$_REQUEST['password']."')";
$res=mysql_query($sql);
If($res)
{
header("Location: login.html");
}
Else
{
echo 'alert("You have entered incorrect credentials")';
header("Location:register.html");
}

}


?>
