<?php # Example from W3c School modified for our scenario
#https://www.w3schools.com/php/php_form_validation.asp
include_once('head.html');
// define variables and set to empty values
$name = $last_name = $first_name = $email = $state = $comments = "";
$last_nameErr = $first_nameErr = $emailErr = $stateErr = $commentsErr = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Validate the last name:
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["last_name"])) {
    $last_nameErr = "Last name is required";
  } else {
    $last_name = test_input($_POST["last_name"]);
  }

//echo $last_name;

// Validate the first name:
  if (empty($_POST["first_name"])) {
    $first_nameErr = "First name is required";
  } else {
    $first_name = test_input($_POST["first_name"]);
  }

 // echo $first_name;
 
// Validate the email:
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
 
// Validate the state:

echo $state;
  if (empty($_POST["state"])) {
    $stateErr = "State is required";
  } else {
    $state = test_input($_POST["state"]);
  }
//  echo $email;

// Validate the comments:
if (empty($_POST["comments"])) {
    $commentsErr = "A comment is required";
  } else {
    $comments = test_input($_POST["comments"]);
  }
//echo $comments;

}


?>

<h3>PHP Form Validation Example</h3>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<fieldset><legend>Enter your information in the form below:</legend>

	<p><label>Last Name: <input type="text" name="last_name" size="20" maxlength="40"></label>
	<span class="error">* <?php echo $last_nameErr;?></span></p>
	
	<p><label>First Name: <input type="text" name="first_name" size="20" maxlength="40"></label>
	<span class="error">* <?php echo $first_nameErr;?></span></p>
	
	<p><label>Email Address: <input type="email" name="email" size="40" maxlength="60"></label>
	<span class="error">* <?php echo $emailErr;?></span></p>
	
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
	<span class="error">* <?php echo $stateErr;?></span></p>

	<p><label>Comments: <textarea name="comments" rows="3" cols="40"></textarea></label>
	<span class="error">* <?php echo $commentsErr;?></span></p>
	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>
<?php
// If everything is OK, print the message:
if ($last_name && $first_name && $email && $state && $comments) {
	
	$full_name = $first_name.' '.$last_name;

	echo "<p>Thank you, <strong>$full_name</strong>, for the following comments:</p>
	<pre>$comments</pre><p>You are from <b>$state </b>.</p>
	<p>We will reply to you at <em>$email</em>.</p>\n";
} 

?>
</body>
</html>
