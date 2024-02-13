<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Coffee Beverage - Enter </title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<div id="container">

<h1> Coffee Beverage: Enter New Drink </h1>

<p class="middle"><a href="preferences_update.php">View full inventory</a></p>

<div id="java">

<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="javaform" method="post" action="" autocomplete="off">

    <label for="style">Style </label>
    <input type="text" name="style" id="style" maxlength="50" required>

  <label for="temperature">Temperature </label>
  <select name="temperature" id="temperature" required>
        <option value=""></option>
        <option value="Hot">Hot</option>
        <option value="Iced">Iced</option>
        <option value="Frozen">Frozen</option>
        <option value="Warm">Warm</option>
    </select>

  <label for="flavor">Flavor </label>
	<input type="text" name="flavor" id="flavor" maxlength="50" required>

  <label for="milk">Milk </label>
	<input type="text" name="milk" id="milk" maxlength="50" required>
   

	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->

</div> <!-- close #socks -->

<!-- empty div -->
<div id="response"></div>

</div> <!-- close container -->

<script src="js/enter.js"></script>

</body>
</html>