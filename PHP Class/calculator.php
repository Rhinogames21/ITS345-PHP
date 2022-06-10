<?php # Script 3.5 - calculator.php

# Create Gallon ration function
function create_radio($value, $name = "undefined_radio") {
    echo '<input type="radio" name="' . $name . '" value="' . $value . '"';
    
    if (isset($_POST[$name]) && ($_POST[$name] == $value)) {
        echo 'checked="checked"';
    }
    echo "> $value ";
} # End of create radio function

function calculate_trip_cost($miles, $mpg, $ppg) {
    $gallons = $miles / $mpg;
    $dollars = number_format(($gallons * $ppg). 2);
    $hours = number_format(($miles/65), 2);
    
    return array($dollars, $hours);
    
} # Endd of Calculate Trip Function


$page_title = "Trip Cost Calculator";
include('header.html');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //Form Validation
    if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency']) && 
        is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency']) ) {
        
            //Calculate the reults
            list($dollars, $hours) = calculate_trip_cost($_POST['distance'], $_POST['efficiency'], $_POST['gallon_price']);
            
            
            //Print the results
            echo '<div class="page-header"><h1>Total Estimated Cost</h1></div>
            <p>The total cost of driving ' .$_POST['distance'] . 'miles, averaging ' . $_POST['efficiency'] . ' miles per gallon, 
            and paying an average of $' . $_POST['gallon_price'] . ' per gallon, is $' . $dollars . '
            if you drive at an average of 65 miles per hour, the trip will take approximately ' . $hours . ' hours.</p>';
            
            
    } else {
        echo '<div class="page-header"><h1>Error!</h1></div>
        <p class="text-danger">Please enter a vaild distance, price per gallon, and fuel efficiency.</p>';        
    }
    
}

?>

<div class="page-header"><h1>Trip Cost Calculator</h1></div>
<form action="calculator.php" method="post">
	<p>Distance (in miles): <input type="number" name="distance" value="<?php if (isset($_POST['distance'])) echo $_POST['distance']; ?>"></p>
	<p>Ave. Price Per Gallon:
		<?php 
		create_radio('3.00', 'gallon_price');
		create_radio('3.50', 'gallon_price');
		create_radio('4.00', 'gallon_price');
		?>
	</p>
	<p>Fuel Efficiency: <select name="efficiency">
		<option value="10" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '10')) echo 'selected="selected"'; ?>>Terrible</option>
		<option value="20" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '20')) echo 'selected="selected"'; ?>>Decent</option>
		<option value="30" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '30')) echo 'selected="selected"'; ?>>Very Good</option>
		<option value="50" <?php if (isset($_POST['efficiency']) && ($_POST['efficiency'] == '50')) echo 'selected="selected"'; ?>>Outstanding</option>
	</select></p>
	<p><input type="submit" name="submit" value="Calculate!"></p>
</form>

<?php include('footer.html'); ?>