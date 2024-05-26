<?php
$obtmarks = 32;

if($obtmarks <101 && $obtmarks >=80){
    echo "Grade A+ <br>";
}
elseif ($obtmarks <80 && $obtmarks >=70){
    echo "Grade A <br>";
}
elseif ($obtmarks <70 && $obtmarks>=60){
    echo "Grade B <br>";
}
elseif ($obtmarks <60 && $obtmarks>=50){
    echo "Grade C <br>";
}
elseif ($obtmarks <50 && $obtmarks>=33){
    echo "Grade D <br>";
}
else {
    echo "Fail <br>";
}
 // array 

 $arr = array (
    "name" => "warisha ",
    "age" => "20",
    "class" => "12",


 );
  echo $arr["name"];


?>