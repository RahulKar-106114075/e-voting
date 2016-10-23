<?php  
Include('connect.php');
	$id =$_REQUEST['id'];
      $password = $_REQUEST['password'];
      $res=mysql_query("SELECT vname, vregion, vpasswd FROM voter WHERE vid='$id'");
   		$row=mysql_fetch_array($res);
   		$count = mysql_num_rows($res); 
        if($count == 1&&$row['vpasswd']==$password) 
        {
        $region=$row['vregion'];
        header("Location: ajax.php?f=$region&g=$id");
        }
        else
        {
          echo '<script type="text/javascript">'; 
          echo 'alert("You have entered the wrong credentials");'; 
          echo 'window.location.href = "login.html";';
          echo '</script>';
        }        

?>


