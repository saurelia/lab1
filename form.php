<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	.error {
  	font-weight: bold;
  	color: #C00;
	}
	</style>
</head>
<body>
<!-- Script 2.1 - form.html -->

<form action="handle_form.php" method="post">

	<fieldset><legend>Enter your information in the form below:</legend>

	<p><label>Last Name: <input type="text" name="last_name" size="20" maxlength="40"></label></p>

	<p><label>First Name: <input type="text" name="first_name" size="20" maxlength="40"></label></p>
	
	<p><label>Email Address: <input type="email" name="email" size="40" maxlength="60"></label></p>

	<p><label>State:
	<?php
	$states = [1 => 'AL', 'CA','FLA', 'GA', 'LA', 'MA','OR','TX'];
	
	// Make the states pull-down menu:
    echo '<select name="state">';
    foreach ($states as $key => $value) {
       echo "<option value=\"$value\">$value
       </option>\n";
    }
    echo '</select>';
	?>
	
	</p>

	<p><label>Comments: <textarea name="comments" rows="3" cols="40"></textarea></label></p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>