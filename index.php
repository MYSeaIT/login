<?php session_start(); /* Starts the session */
	
/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
	$logins = array('user' => '2223adil','user1' => '8087', 'user2' => '7805', 'user3' => '6215', 'user4' => '2715', 'user5' => '7055', 'user6' => '7195', 'user7' => '6340', 'user8' => '3729', 'user9' => '7958', 'user10' => '3668', 'user11' => '5682', 'user12' => '3091', 'user13' => '5955', 'user14' => '3030', 'user15' => '2213', 'user16' => '3599', 'user17' => '9422', 'user18' => '7450', 'user19' => '7781', 'user20' => '7595', 'user21' => '6735', 'user22' => '5573', 'user23' => '2246', 'user24' => '1982', 'user25' => '4273', 'user26' => '2125', 'user27' => '7364', 'user28' => '5366', 'user29' => '4641', 'user30' => '3944', 'user31' => '6374', 'user32' => '8650', 'user33' => '4399', 'user34' => '4163', 'user35' => '7782', 'user36' => '5861', 'user37' => '8586', 'user38' => '6503', 'user39' => '9735', 'user40' => '3196',  'username1' =>  'password1','username2' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:https://121ingles.online/private-area/");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<style>
body {
  font-family: Arial, sans-serif;
}

.Table {
  width: 450px;
  margin: 0 auto;
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px #ccc;
}

.Input {
  width: 90%;
  padding: 8px;
  margin-top: 8px;
  font-size: 16px;
  border: 1px solid #ccc;
  box-shadow: 2px 2px 6px #ccc;
}

.Button3 {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  margin-top: 10px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 96%;
  font-size: 18px;
}

@media (max-width: 600px) {
  .Table {
    width: 100%;
  }
}
</style>
</head>
<body>
<br>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="center" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>
</body>
</html>
