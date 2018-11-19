<?php
	include 'C:\xampp\htdocs\166210307109\Practicals\Pra30 Connect\connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>

<table border="1">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Number</th>
			
		</tr>
	</table>
	<?php 
		
		$selectsql="select * from users";
		$selectcmd=mysqli_query($con,$selectsql);
		while($showdata = mysqli_fetch_array($selectcmd))
		{
			?>

	<table border="1">
		<tr>
			<td><?php echo $showdata['id']; ?></td>
			<td><?php echo $showdata['name']; ?></td>
			<td><?php echo $showdata['email']; ?></td>
			<td><?php echo $showdata['number']; ?></td>

		</tr>
	</table>

		<?php } ?><!--   END OF PHP WHILE LOOP -->
 </form>
	</center>
	
</center>	
</body>
</html>