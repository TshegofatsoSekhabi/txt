	<?php
		require 'order_class.php';
		$conn = new connect3();
		$conn->conDb($_POST['orderName'],$_POST['orderTotAmount']);
		
		echo strftime('%c<br />');
		
	?>
		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap-theme.min.css" rel="stylesheet">
	
	<?php include 'header.php'?>
<html>
<body>
	<h1 align="center"><strong>Login here</strong></h1>
	<table width="490" align="center" border="4" height="80">
    <tr>
    <td width="699"><form name="form1" method="post" action="onlineOrder.php" class="form">
		
			<label>Order Name:</label><input type='text' class="form-control" name="categoryName"id="categoryName" >
			<label>:</label><input type='text' class="form-control" name="categoryDescript"  id="categoryDescript"><br>

			
			<input class="btn btn-success"type='submit' name="button" id="button" value="category">
		</form>
    </td>
  </tr>
</table>
</body>
</html>	