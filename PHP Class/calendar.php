<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calendar</title>
    <style type="text/css">
    .error {
        font-weight: bold;
        color: #C00;
        }
    </style>
</head>
<body>
<form action="calendar.php" method="post">
<?php #Script 2.6 - calendar.php
//Months Array
$months = [1 => 'January', 'February', 
    'March', 'April',
    'May', 'June',
    'July', 'August', 
    'September', 'October',
    'November', 'December'];

//Days & Years Array
$days = range(1,31);
$years = range(2017, 2027);

//Months Pulldown
echo '<select name="month">';
foreach ($months as $key => $value) {
    echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>';

//Days Pulldown
echo '<select name="day">';
foreach ($days as $value) {
    echo "<option value=\"$value\">$value</option>\n";
}
echo '</select>';
//Years Pulldown
echo '<select name="years">';
foreach ($years as $value) {
    echo "<option value=\"$value\">$value</option>\n";
}
echo '</select>';


?>
</form>
</body>
</html>
