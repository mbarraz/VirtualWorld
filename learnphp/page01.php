<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<!-- PHP scripting starts here --!>
<?php
echo "<h4>Hello World!</h4>";
$myString = "Hello World 2.";
$x = 20;
$y = 2.5;
$z = $x + $y;

echo "<p>" . $myString . "</p>";
echo "<p>" . $z . "</p>";

define("PI", "3.59493910394501");
echo "<h1>" . PI . "</h1>";
?>
<!-- PHP scripting ends here --!>

</body>
</html>