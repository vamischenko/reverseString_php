<?php

function reverseString($str)
{
    $index = strlen($str) - 1;
    $reversedString = '';

    while ($index >= 0) {
        $currentChar = $str[$index];
        $reversedString = "{$reversedString}{$currentChar}";
        $index = $index - 1;
    }

    return $reversedString;
}

function revStr($str)
{
	for ($i = strlen($str); $i>=0; $i--) $rev[] = $str[$i];
	$revstr = implode (“”, $rev);
	return $revstr;
}

function myrev($src) {
	$length = strlen($src);
	for ($i = 0; $i < $length / 2; $i++) {
		$a = $src[$i];
		$src[$i] = $src[$length - $i - 1];
		$src[$length - $i - 1] = $a;
	}
	return $src;
}

?>