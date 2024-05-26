<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>  
<?php
echo "<table border='1'>";
echo "<tr><th>Number</th><th>Result</th></tr>";
for ($i = 1; $i <= 10; $i++) {
    $result = $i * 10;
    echo "<tr><td>$i</td><td>$result</td></tr>";
}
echo "</table>";
?>


</body>
</html>