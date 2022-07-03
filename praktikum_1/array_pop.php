<!DOCTYPE html>
<html>
<body>
<?php
$tims = ["Erwin", "Heru", "Ali", "Zaki", "Jundi"];
array_pop($tims);
foreach ($tims as $person) {
    echo $person . '<br/>';
}
?>
</body>
</html>