
<?php if(isset($_SESSION['admin_email'])) : ?>
<?php 
$db = mysqli_connect('localhost', 'root', '', 'bahar_al_shamal');
 
  $query = "SELECT * FROM orders ";
  $results = mysqli_query($db, $query);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
 </head>
 <body>
 <table style="margin-bottom: 40px;">
 	<tr>
 		<th bgcolor="#0069D9"><strong>ID</strong></th>
 		<th bgcolor="#0069D9"><strong>Username</strong></th>
 		<th bgcolor="#0069D9"><strong>Email</strong></th>
 		<th bgcolor="#0069D9"><strong>Mobile Number</strong></th>
 		<th bgcolor="#0069D9"><strong>Address</strong></th>
 		<th bgcolor="#0069D9"><strong>Days</strong></th>
 		<th bgcolor="#0069D9"><strong>Price</strong></th>
    <th bgcolor="#0069D9"><strong>Service</strong></th>
 		<th bgcolor="#0069D9"><strong>Starting Date</strong></th>
 		<th bgcolor="#0069D9"><strong>Ending Date</strong></th>
        <th bgcolor="#0069D9"><strong>Edit</strong></th>
 	</tr>
 	<?php 
	 while($row = mysqli_fetch_assoc($results)){
	 ?>
            <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["mobile_number"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["days"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
            <td><?php echo $row["service"]; ?></td>
            <td><?php echo $row["starting_date"]; ?></td>
            <td><?php echo $row["ending_date"]; ?></td>
            <td><a href="delete_orders.php?id=<?php echo $row['id']?>">Delete</a></td>
            </tr>
	<?php 
	}
	?>
 	</table>
    <?php else : ?>
  <h4 align="center" style="color: red;">Only Admin has access to this page</h4>
<?php endif?>
 </body>
 </html>