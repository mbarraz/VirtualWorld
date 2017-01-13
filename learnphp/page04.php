<?php 
$x = 100; 

while($x >= 0) {
    echo "The number is: $x <br>";
    $x -= 5;
} 

echo "<br>";

$y = 0;

while ($y <= 22) {
    if ($y % 2 == 0 && $y % 5 != 0)
    echo "The number is $y <br>";
    $y ++;
}

echo "<br>";

$fruit = array("Cherry", "Apple", "Peach", "Plum");
$count = count($fruit);

for($x = 1; $x < $count; $x++) {
    echo $x . " My favorite fruit " .  $fruit[$x-1];
    echo "<br>";
}

?>