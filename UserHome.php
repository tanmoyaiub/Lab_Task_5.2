<?php

session_start();
if(isset($_COOKIE['name'])){

?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Info table
	</title>
</head>
<body>
	 
	<table width="100%" style="border:1px solid #888;" height="100">
	
		
		<tr  height="100">
			<td style="border-bottom:1px solid #888;" width="30%" ><b> <font size="9">Company</font></b></td>
			
<td width="10%" style="border-bottom:1px solid #888;" colspan="2">Logged in as<a href="signin.php"><?php echo $_SESSION["name"]; ?></a></td>			
			<td width="10%" style="border-bottom:1px solid #888;"><a href="Logout.php">Logout</a></td>
		</tr>	
		
         
		  <tr width="100%" height="300" style="border: none;">
		  <td width="100%"  height="100%" style="border-bottom:1px solid #888;">  
		  <table style="border-right:1px solid #888;"><tr><td  width="50%"> <b> Account</b><br>
			<ul>
			<li> <a href="dashboard.php">Dashboard </li>
			<li> <a href="viewprofile.php">View Profile </li>
			<li> <a href="editprofile.php">Edit Profile </li>
			<li> <a href="changepic.php">Change Profile Picture </li>
			<li> <a href="changepass.php"> Change Password </li>
			<li> <a href="logout.php">Log Out </li>
			
			</ul>
		  </td>
			<td> </td>
		  </tr> </table>
		  
		  </td>
			<td colspan="3" style="border-bottom:1px solid #888;">
			<b>Welcome <br><?php echo $_SESSION["name"]; ?> </b></a>
			</td>
		  
		  </tr>
		  <tr width="100%" style="border: none;">
		 
			<td align="center" colspan="4" style="border-bottom:1px solid #888;"> Copyright 2017 </td>
			
		  
		  </tr>
		  
          
		  </table>
		  
          	   
</body>
</html>


<?php
}
else{
	header('location:signin.php');
}
?>

