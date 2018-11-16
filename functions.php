<?php

$numbers = ['25','15','32','68','9','17'];
$sentence = "Hello world. What a beautiful day";
$words = ['Labas', 'Petras', 'Vakaras', 'Diena', 'Jonas'];

function removeFirst($numbers) {
	print_r(implode(', ', $numbers));
	echo "<br><b>Remove first number:</b><br>";
	array_shift($numbers);
	print_r(implode(', ', $numbers));
}

function removeBiggest($numbers) {
	print_r(implode(', ', $numbers));
	echo "<br><b>Remove highest number:</b><br>";
	$numbers = array_diff($numbers, [max($numbers)]);
	print_r(implode(', ', $numbers));
}

function swap($sentence) {
	echo $sentence . "<br>";
	$sentence_array = (explode(" ", $sentence));
	$last_element = count($sentence_array) - 1;
	$temp = $sentence_array[0];
	$sentence_array[0] = $sentence_array[$last_element];
	$sentence_array[$last_element] = $temp;
	echo "<b>Swap words: first and last</b><br>" . implode(" ", $sentence_array);
}

function upperCase($sentence) {
	echo $sentence . "<br>";
	$sentence_array = (explode(" ", $sentence));
	$sentence_array = array_map('ucfirst', $sentence_array);
	echo "<b>First letter uppercase:</b><br>" . implode("+", $sentence_array);
}

function getRandom($words) {
	$qty = count($words) - 1;
	print_r(implode(', ', $words));
	$random = rand(0, $qty);
	echo "<br><b>Random word:</b> " . $words[$random];
}