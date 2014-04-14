	<?php
		require 'login_class.php';
		$conn = new connect1();
		$conn->conDb($_POST['email'],$_POST['password']);
	
	?>
		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap-theme.min.css" rel="stylesheet">
	
	<?php include 'header.php'?>
<html>
<body>
	<h1 align="center"><strong>Login here</strong></h1>
	<table width="490" align="center" border="4" height="80">
    <tr>
    <td width="699"><form name="form1" method="post" action="login.php" class="form">
		
			<label>Name:</label><input type='text' class="form-control" name='email' id='email' ">
			<label>Password:</label><input type='text' class="form-control" name='password' maxlength="16" id='password'><br>

			
			<input class="btn btn-success"type='submit' name="button" id="button" value="login">
		</form>
    </td>
  </tr>
</table>
</body>
</html>	