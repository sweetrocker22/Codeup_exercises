<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

//Create a loop that will echo out every value, including those nested in arrays

foreach ($things as $thing) {
  if (is_int($thing)){
	echo "{$thing}\n";
  }elseif (is_float($thing)) {
	echo "{$thing}\n";
  }elseif (is_bool($thing)) {
	echo "{$thing}\n";
  }elseif (is_array($thing)) {
	foreach ($thing as $item){
	  echo "{$thing}\n";
    }
  }elseif (is_null($thing)) {
  	echo "{$thing}\n";
  }elseif (is_string($thing)) {
	echo "{$thing}\n";
  }
}
//Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

foreach ($things as $thing) {
  if (is_int($thing)){
	echo "Integer\n";
  }elseif (is_float($thing)) {
	echo "Float\n";
  }elseif (is_bool($thing)) {
	echo "Boolean\n";
  }elseif (is_array($thing)) {
	echo "Array\n";
  }elseif (is_null($thing)) {
	echo "Null\n";
  }elseif (is_string($thing)) {
	echo "String\n";
  }
}
//Construct a loop that iterates through each value and outputs only values with a type that is scalar.

foreach ($things as $thing) {
  if (is_scalar($thing)) {
	echo "{$thing}\n";
  } else {
	echo null;
  }
}

















