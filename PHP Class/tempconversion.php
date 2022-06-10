<?php
function convert_farenheit(int $value, $conversion = 'celsius') {
    $celsius = ($value - 32) * (5/9);
    if (strtolower($conversion) == 'kelvin') {
        return $celsius + 273.15;
    } else {
        return $celsius;
    }
}

echo '<h2>That temperature is ' . number_format(convert_farenheit(100), 2) . ' degrees celsius!</h2>';
echo '<h2>That temperature is ' . number_format(convert_farenheit(100, 'Kelvin'), 2) . ' degrees Kelvin!</h2>';
