<?php

$numbers = array(10, 20, 30, 40, 50);


$element = 30;


foreach($numbers as $number) {
  if($number == $element) {
    echo $element . " found in the array.";
    break;
  }
}


if(!in_array($element, $numbers)) {
  echo $element . " not found in the array.";
}
?>
