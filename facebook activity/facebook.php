

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.head{
			background-color: #3f5c9a;
		}
		.body{
			background-color: lightgray;

		}
		.email{
			font-size: 13px;
			padding-left: 350px;
			color: white;
		}
		.name{
			font-size: 25px;
			font-family: tahoma;
			padding-left: 10px;
			font-weight: bold;
			color: white;
		}
		.pass{
			font-size: 13px;
			padding-left: 115px;
		padding-right:  200px;
		color: white;
		}
		
		
		
		.input{
			padding-left: 350px;
		}
		.Forgot{
			padding-left: 550px;
			color: white;

		}
		.head2{
			font-size: 25px;
			padding-left: 455px;
			color: black;
		}
		.quick{
			padding-left: 455px;
			font-size: 15px;
		}
		.fl{
			padding-left: 185px;
		}
		.lf{
			width: 23%;
			height: 25px;
		}
		.connect{ 
			font-size: 20px;
			padding-left: 10px;

		}
		.mobile{
			padding-left: 455px;
		}
		.mobile2{
			width: 49%;
			height: 25px;
		}
		.birthday{
			padding-left: 455px; 
		}
		.date{
			padding-left: 455px;
		}
		.Gender{
			padding-left: 455px;
		}
		.Gender2{
			padding-left: 455px;
		}
		.Policy{
			padding-left: 455px;
		}
		.SignUp{
			padding-left: 455px;
			
			text-align: center;
		}
		.last{
			padding-left: 455px;
		}
		.button{
			background-color: yellowgreen;
			border-radius: 5px 5px 5px 5px;
			color: white;
			width: 200px;
			height: 30px;
		}
		td{
	border-left: none;
	border-right: none;
	border-bottom: none;
	border-top: none;
}
i {
	color: red;
	}
	</style>
	<title>FACEBOOK</title>
</head>

<body>
<center>
<form method="POST">
	<table border="2" >
		<tr>
			<td class="head"><p style="float: left;" class="name"> facebook</p><sub class="email">Email or Phone</sub> <sub class="pass">Password</sub> <br><b class="input"><input type="text" name="txtem" >&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input type="Password" name="txtpa"></b>&nbsp;&nbsp; &nbsp;&nbsp;<button name="login">login</button><br><sup class="Forgot">Forgot Account?</sup>
		</td>		
		<tr>
			<td class="body"><b class="head2">Sign Up</b><br><b class="quick">It's quick and Easy.</b>
				<br>
			<b style="float: left;" class="connect">Connect with friends and the<br>world aroud you on Facebook.</b>
			<b class="fl"><input type="text" name="fname" placeholder="First name" class="lf"> <i></i>&nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="lname" placeholder="Last name" class="lf"></b><i></i>
			<br>
			<br>
			<b class="mobile"><input type="text" name="enum" placeholder="Mobile number or email" class="mobile2"></b><b style="float: left;">See photos and updates from friends in News Feed.</b>
			<br>
			<br>
			<b class="mobile"><input type="password" name="password" placeholder="New password" class="mobile2" id="password"> </b>
			<br>
			<br>
			<b style="float: left;">Share whats new in your life on your Timeline.</b>
			<br>
			<br>
			<b class="birthday">Birthday</b>
			<br>
		 	<input type="date" name="birthday" style="float: right; margin-right: 380px">
			</b>
			<br>
			<b style="float: left;">Find more of what you're looking for with Facebook Search</b>
			<br>
			<b class="Gender">Gender</b><br><b class="Gender2"><input type="radio" name="gender" value="female"> Female <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="custom">Custom</b>
			<br>
			<br>
			<b class="Policy">By clicking Sign Up, you agree to our Terms,Data Policy and</b><br><b class="Policy">Cookies Policy. You may recieve SMS Notification from us and</b><br><b class="Policy">can opt out any time.</b>
			<br>
			<br>
			<b class="SignUp"><input type="Submit" name="sub" value="signup" onclick="return Validate()" class="button">  </b>
			<br>
			<br>
			<b class="last">Create a Page for a celebrity, band or business</b>
			
		</td>
	</table>
</form>

<?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="dbFacebook";

$connect = mysqli_connect($servername,$username,$password,$dbname);
?>

<?php
		//Post Method

		 if(isset($_POST['sub'])){
			//initialization
			$firstname = $_POST['fname'];
			$lastname = $_POST['lname'];
			$email = $_POST['enum'];
			$pass = $_POST['password'];
			$birth = $_POST['birthday'];
			$sex = $_POST['gender'];

			
		
			
			//insert record to mysql 
			$insert = "INSERT INTO tblfacebook(fname,lname,enum,password,birthday,gender)VALUES('$firstname','$lastname','$email','$pass','$birth','$sex')";

			$query = mysqli_query($connect,$insert);
			if ($query == true) {
				echo "<strong>Record not Added</strong> ";

						}else{
				echo "<strong>Record not Added</strong> ";
			}
	}
	?>


<?php

	//login validation 

			$servername="localhost";
			$username="root";
			$password="";
			$dbname="dbFacebook";

$connect = mysqli_connect($servername,$username,$password,$dbname);


			if(isset($_POST['login'])){
			$em = $_POST['txtem'];
			$pa = $_POST['txtpa'];

			$query= "SELECT * FROM tblfacebook WHERE enum ='$em' AND password='$pa'";
			$result= mysqli_query($connect,$query);
			$count=mysqli_num_rows($result);


			if($count>0){
				header("location: loginpage.php");
				
			}else{
				echo "<h1>USERNAME AND PASSWORD IS INCORRECT";     
				
			}
		}
?>
</center>
</body>
</html>