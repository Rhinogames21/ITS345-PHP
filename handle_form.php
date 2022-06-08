<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php #Script 2.2 - handle_form.php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comments = $_REQUEST['comments'];
$age = $_REQUEST['age'];
$gender = NULL;

echo "<p>Thank you, <strong>$name</strong>, for the following comments:</p>
<pre>$comments</pre>
<p>We will reply to you at <em>$email</em>.</p>\n";
if (isset($_REQUEST['gender'])) {
    if ($gender == 'F') {
        $gender = "Female";
    } else {
        $gender = "Male";
    }
} else {
        $gender = "You have no gender.";
    }

echo "<p>You are $age and a $gender.</p>";

?>
</body>
</html>

