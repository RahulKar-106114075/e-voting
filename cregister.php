<?php
Include('connect.php');
If($_REQUEST['Name']=='' || $_REQUEST['Id']=='' ||$_REQUEST['Region']==''||$_REQUEST['Party']==''|| $_REQUEST['password']==''|| $_REQUEST['repassword']=='')
{
Echo "please fill the empty field.";
}
Else
{
$sql="insert into candidate(cid,cname,cregion,cparty,num_of_votes,cpasswd) values('".$_REQUEST['Id']."', '".$_REQUEST['Name']."',  '".$_REQUEST['Region']."','".$_REQUEST['Party']."', 0 , '".$_REQUEST['password']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}


?>
