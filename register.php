	<?php	
			require 'register_class_2.php';
			$conn = new connect();
			@$conn->conDb($_POST['name'],$_POST['lname'],$_POST['email'],$_POST['password'],$_POST['address']);
		?>
		<link href="bootstrap.min.css" rel="stylesheet" />
		  <?php include 'header.php'?>
		  
	<html>
	<body>
		<h1 align="center"><strong>Register Form</strong></h1>
		<table width="200" align="left" border="4" height="20"><tr><td><?php require 'sidebar.php'?><td></tr><table width="800" align="center" border="4" height="50">
    <tr>
    <td width="699">	<form name="form1" method="post" action="register.php" class="form">
		
			<label>Name:</label><input type="text" class="form-control" name="name" id='name' ;>
			<label>Last name:</label><input type="text" class="form-control" name="lname" id="lname"><br>
			<label>Email:</label><input type="text" class="form-control" name="email" id="email"><br><br>
			<label>Password:</label><input type="text" class="form-control" name="password" maxlength="16" id="password"><br>
			<label> Address: </label> <textarea name="address" class="form-control" id="address" cols="45" rows="5"></textarea><br>
			<input class="btn btn-success"type="submit" name="button" id="button" value="register" onclick="valid();">
		</form>
    </td>
  </tr>
</table>

		<a href="login.php" align="center" >login</a><br></br>
		<?php require 'footer.php'?>
		</body>
		</html>
		
