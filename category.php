	<?php
		require 'category_class.php';
		$conn = new connect2();
		@$conn->conDb($_POST['categoryName'],$_POST['categoryDescript']);
	
	?>
		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap-theme.min.css" rel="stylesheet">
	
	<?php include 'header.php'?>
<html>
<body>
	<h1 align="center"><strong>Login here</strong></h1>
	<table width="200" align="left" border="4" height="20"><tr><td><?php require 'sidebar.php'?><td></tr><table width="800" align="center" border="4" height="50">
	<table width="490" align="center" border="4" height="80">
    <tr>
    <td width="699"><form name="form1" method="post" action="category.php" class="form">
		
			<label>Name:</label><input type='text' class="form-control" name="categoryName"id="categoryName" >
			<label>Password:</label><input type='text' class="form-control" name="categoryDescript"  id="categoryDescript"><br>

			
			<input class="btn btn-success"type='submit' name="button" id="button" value="category">
		</form>
    </td>
  </tr>
</table>
<?php require 'footer.php'?>
</body>
</html>	