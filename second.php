<?php

echo "<pre>";

print_r($_SERVER);

echo "</pre>";

echo $_REQUEST ['name']."<br>";
echo $_REQUEST ['email'];

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo $_POST['name']."<br>";
echo $_POST['email'];
?>