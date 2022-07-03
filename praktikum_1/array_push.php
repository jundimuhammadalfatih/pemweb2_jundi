<!DOCTYPE html>
<html>
<body>
<?php
$tims = ["Jundi", "Muhammad", "Al", "Fatih"];
array_push($tims, "Alfa");
foreach ($tims as $person) {
    echo $person . '<br/>';
}
?>
</body>
</html>