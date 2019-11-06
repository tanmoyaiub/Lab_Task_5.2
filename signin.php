<?php
	session_start();
if(isset($_POST['login'])){
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		
		
		if(empty($uname) == true || empty($pass) == true){
			echo "fill all!";
		}
		else{
            $name='data.txt';
	$read = fopen($name, 'r');
	
		$fetch = fread($read, filesize($name));
	fclose($read);
	$lines=explode("\n", $fetch);
	foreach ($lines as $line) {
		$user = explode("|", $line);
	
		if($user[2] == $uname && $user[3] == $pass){

					setcookie("name", $user[0], time()+3600, "/");
			$_SESSION['name']=$user[0];
			header('location: UserHome.php');
		}

		
		

	}	
	
	}
	
	
			}
		


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
			<td style="border-bottom:1px solid #888;" width="70%" ><b> <font size="9">Company</font></b></td>
			<td width="10%" style="border-bottom:1px solid #888;"><a href="PublicHome.php">Home</a></td>
			<td width="10%" style="border-bottom:1px solid #888;"><a href="signin.php">Login</a></td>			
			<td width="10%" style="border-bottom:1px solid #888;"><a href="Registration.php">Registration</a></td>
		</tr>	
		
         
		  <tr width="100%" height="100" style="border: none;">
		  <td colspan="4" style="border-bottom:1px solid #888;"><form method="POST" action="signin.php">
		<fieldset>	
			<legend><b>LOG IN</b></legend>
			<table cellpadding="5px">
			<tr>
				<td>
			User Name:<br><input type="text" name="uname" value="">
			</td>
			</tr>
			<tr>
				<td>
			Password <br><input type="password" name="pass" value="">
			</td>
			</tr>
			<tr>
			<td>
			<input type="checkbox" name="check" value="check"/>Remember Me
			</td>
			</tr>
			
			
			<td style="border-top:1px solid #888;">
			<input type="submit" name="login" value="submit"/><br>
			<a href="forget.php">Forget Password?</a>
			</td>
			</tr>
			
			</table>

		</fieldset>	


	</form>

 </td>
			
		  
		  </tr>
		  <tr width="100%" style="border: none;">
		 
			<td align="center" colspan="4" style="border-bottom:1px solid #888;"> Copyright 2017 </td>
			
		  
		  </tr>
		  
          
		  </table>
		  
          	   
</body>
</html>




