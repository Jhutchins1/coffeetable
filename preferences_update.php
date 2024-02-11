<?php
	include 'database.php';
	$query = "SELECT * FROM coffee ORDER BY name";
	$java = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Favorite Coffee </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">

<h1>Coffee Preferences</h1>

<p class="middle"><a href="enter_new_record.php">Add a new drink!</a></p>

<p class="middle">To update or delete a row, select it below.</p>

<p class="middle">Then click the Submit button at the bottom of the table.</p>

<!--
     the form below is handled by the PHP file named in the action= attribute
-->

<table>
	<!-- table column headings -->
	<tr>
	  <th>ID</th>
	  <th>Style</th>
	  <th>Temperature</th>
	  <th>Flavor</th>
	  <th>Milk</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $socks comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($java)) :  ?>

<tr>
  
  <td><?php echo stripslashes($row['id']); ?></td>
  <td><?php echo $row['style']; ?></td>
  <td><?php echo $row['temperature']; ?></td>
  <td><?php echo $row['flavor']; ?></td>
  <td><?php echo $row['milk']; ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<input type="submit" id="submit" value="Submit One Row for Editing">



<p class="middle"><a href="enter_new_record.php">Add a new sock record</a></p>

</div> <!-- close container -->
</body>
</html>