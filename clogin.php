<?php  
Include('connect.php');
        $id =$_REQUEST['id'];
        $password = $_REQUEST['password'];
        $res=mysql_query("SELECT cname, cregion, cparty,cpasswd FROM candidate WHERE cid='$id'");
   		$row=mysql_fetch_array($res);
   		$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   
      #  $strSQL = mysqli_query($connection,"SELECT vname FROM voter WHERE vid = '$id' and vpasswd = '$password'";);
       # $Results = mysqli_fetch_array($strSQL);
        #$count = mysqli_num_rows($Results);
        if($count == 1&&$row['cpasswd']==$password) 
        {
            header("location:cinfo.php?r=$id");
        }
        else
        {
            echo '<script type="text/javascript">'; 
          echo 'alert("You have entered the wrong credentials");'; 
          echo 'window.location.href = "clogin.html";';
          echo '</script>';
        }        
?>
