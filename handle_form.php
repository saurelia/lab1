<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
	<style type="text/css" title="text/css" media="all">
	.error {
		font-weight: bold;
		color: #C00;
	}
	</style>
</head>
<body>
<?php # Script 2.4 - handle_form.php #3

// Validate the last name:
if (!empty($_REQUEST['last_name'])) {
	$last_name = $_REQUEST['last_name'];
} else {
	$last_name = NULL;
	echo '<p class="error">You forgot to enter your last name!</p>';
}

// Validate the first name:
if (!empty($_REQUEST['first_name'])) {
	$first_name = $_REQUEST['first_name'];
} else {
	$first_name = NULL;
	echo '<p class="error">You forgot to enter your first name!</p>';
}

// Validate the email:
if (!empty($_REQUEST['email'])) {
	$email = $_REQUEST['email'];
} else {
	$email = NULL;
	echo '<p class="error">You forgot to enter your email address!</p>';
}

// Validate the state:
if (isset($_REQUEST['state'])) {

	$state = $_REQUEST['state'];

} else { // $_REQUEST['state'] is not set.
	$state = NULL;
	echo '<p class="error">You forgot to select your state!</p>';
}



// Validate the comments:
if (!empty($_REQUEST['comments'])) {
	$comments = $_REQUEST['comments'];
} else {
	$comments = NULL;
	echo '<p class="error">You forgot to enter your comments!</p>';
}



// If everything is OK, print the message:
if ($last_name && $first_name && $email && $state && $comments) {
	
	$full_name = $first_name.' '.$last_name;

	echo "<p>Thank you, <strong>$full_name</strong>, for the following comments:</p>
	<pre>$comments</pre><p>You are from <b>$state </b>.</p>
	<p>We will reply to you at <em>$email</em>.</p>\n";



} else { // Missing form value.
	echo '<p class="error">Please go back and fill out the form again.</p>';
}

?>
</body>
</html>