<?php
$empsalary = 50000;
if ($empsalary == 50000) {
    echo "employee salary is 50000<br>";
} elseif ($empsalary == 20000) {
    echo "employye salary is 20000<br>";
} else {
    echo "nothing<br>";
}
?>

<?php
$obtmarks = 40;

if ($obtmarks < 101 && $obtmarks >= 80) {
    echo "grade A+<br>";
} elseif ($obtmarks < 80 && $obtmarks >= 70) {
    echo "grade A<br>";
} elseif ($obtmarks < 70 && $obtmarks >= 60) {
    echo "grade B<br>";
} elseif ($obtmarks < 60 && $obtmarks >= 50) {
    echo "grade C<br>";
} elseif ($obtmarks < 50 && $obtmarks >= 40) {
    echo "grade D<br>";
} else {
    echo "grade F<br>";
}
?>
