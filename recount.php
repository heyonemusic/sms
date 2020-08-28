<?php

function get_encode($textString) {
	if(preg_match("/[А-Яа-я]/", $textString)) {
		return 1;
	} elseif(preg_match("/[A-Za-z]/", $textString)) {
		return 0;
	}
	return -1; 
}

function str_split_unicode($str, $l = 1) {
	if ($l > 0) {
		$ret = array();
		$len = mb_strlen($str, "UTF-8");
		for ($i = 0; $i < $len; $i += $l) {
			$ret[] = mb_substr($str, $i, $l, "UTF-8");
		}
		return $ret;
	}
	return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}

$textString = $_POST['text'];
$symbols = mb_strlen($textString);
echo 'Количество символов: ' . $symbols;
echo '<br>';
$encode = get_encode($textString);
$ops = [
	[160,153],
	[70,67]
];
$result = str_split_unicode($textString, $ops[$encode][intval($symbols>$ops[$encode][0])]);
$count = count($result);
echo 'Количество SMS: ' . $count;