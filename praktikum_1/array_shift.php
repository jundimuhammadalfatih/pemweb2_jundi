<!DOCTYPE html>
<html>
<body>
<?php
$tims = ["Jundi", "Muhammad", "Al", "Fatih"];
array_shift($tims);
foreach ($tims as $person) {
    echo $person . '<br/>';
}
?>
</body>
</html>