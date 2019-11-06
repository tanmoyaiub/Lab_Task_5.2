<?php
if(isset($_POST['signup'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		$gender =$_POST["gender"];
		$day =$_POST["day"];
		$month =$_POST["month"];
		$year =$_POST["year"];
		
		
		if(empty($name)==true ||empty($uname)==true || empty($email)==true || empty($pass) == true ||empty($cpass) == true || empty($gender)==true ||empty($year)==true ||empty($day)==true ||empty($month)==true){
			echo "fill all!";
		}
		elseif ($pass!=$cpass) {
		echo "password doesn't match";	
		}
		

		else{
            //$_POST['name'] = $name;

			$user = fopen('data.txt', 'a+');
			$data=fwrite($user, "$name"."|"."$email"."|"."$uname"."|"."$pass"."|"."$cpass"."|"."$gender"."|"."$day"."/"."$month"."/"."$year"."\n");
			
	fclose($user);
		header('location: signin.php');
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
		  <td colspan="4" style="border-bottom:1px solid #888;">
		  <form method="POST" action="Registration.php">
		<fieldset>	
			<legend><b>REGISTRATION</b></legend>
			<table cellpadding="5px">
			<tr>
				<td>
			Username:<br><input type="text" name="name" value="">
			</td>
			</tr>
			<tr>
				<td>
			Email:<br><input type="email" name="email" value="">
			</td>
			</tr>
			<tr>
			<tr>
				<td>
			Username:<br><input type="text" name="uname" value="">
			</td>
			</tr>
				<td>
			Password <br><input type="password" name="pass" value="">
			</td>
			</tr>
			<tr>
				<td>
			Confirm Password<br><input type="password" name="cpass" value="">
			</td>
			</tr>
			
			<tr>
			
			
			<td style="border-top:1px solid #888;"><fieldset>
			<legend> Gender</legend>
			<input type="radio" name="gender" value="Male"/>Male
			<input type="radio" name="gender" value="Female"/>Female
			<input type="radio" name="gender" value="Other"/>Other
			</fieldset>
			</td>
			
			
			</tr>
			<tr><td><fieldset>
			<legend> Date of Birth</legend>
			<input type="text" name="day" value="">/
			<input type="text" name="month" value="">/
			<input type="text" name="year" value="">(dd/mm/yyyy)
			</fieldset>
			</td>
			</tr>
			
			<tr>
			<td style="border-top:1px solid #888;">
			<input type="submit" name="signup" value="Submit"/>
			<input type="submit" name="reset" value="reset"/><br>
			Already a menmber? <a href="signin.php">Sign In</a>
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



