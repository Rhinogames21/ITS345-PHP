 <?php
  $string = "    Hello World      \n\n\n\n\n\n";
  $text = "...We don't need these ellipses...";
  
  echo "First Example:";
  echo "<p>", $string, "</p>";
  $trimString = trim($string);
  echo "<p>", $trimString, "</p>";
  
  echo "Second Example:";
  echo "<p>", $text, "</p>";
  $trimText = trim($text, ".");
  echo "<p>", $trimText, "</p>";
  
?>