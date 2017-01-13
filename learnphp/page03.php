<?php
date_default_timezone_set("America/Los_Angeles");
echo date("D h:i:s A");
$t = date("H");

if ($t < "20") {
    echo " Have a good day!";
}
else{
    echo " Have a good night player";
}

echo "<br>";

$favcolor = "black";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>