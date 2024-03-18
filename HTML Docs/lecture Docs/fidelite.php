<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>\
<body>
	<form method="P0ST">
		user_id<input type="number" name="user_id"><br><br>
			name<input type="text" name="name"><br><br>
				email<input type="text" name="email"><br><br>
					address<input type="text" name="address"><br><br>
						phone_number<input type="number" name="phone_number"><br><br>
			
						gender	<select name="gender">
								<option>male</option>
								<option>female</option>
							</select><br><br>
								user_currency<input type="number" name="user_currency
								"><br><br>
								password<input type="password" name="password"><br><br>
								<input type="submit" name="sub" value="login">

</form>
</body>
<?php
if(isset($_POST['sub'])){
	$user=$_post['user_id'];
	$name=$_post['name'];
	$email=$_post['email'];
	$address=$_post['address'];
	$p_nmbr=$_post['phone number'];
	$gender=$_post['gender'];
	$user_c=$_post['user_currency'];
	$pass=$_post['password'];
	$con=mysqli_connect('localhost','root','',' benegusenga_mbabazi_fidelite_mps');
	$sqr=mysqli_query($con ,"insert *into benegusenga_mbabazi_fidelite_mps where values $user='user_id'$name='name'$email='email'$address='address'$p_nmbr='phone number'$gender='gender'$user_c='user_currency'$pass='password'");
}
?>
</html>