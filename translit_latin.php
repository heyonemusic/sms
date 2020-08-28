<?php

function translit($value)
{
	$value = $_POST['text'];
	$converter = array(
		'a' => 'а',    'b' => 'б',    'v' => 'в',    'g' => 'г',    'd' => 'д',
		'e' => 'е',    'e' => 'е',    'zh' => 'ж',   'z' => 'з',    'i' => 'и',
		'y' => 'й',    'k' => 'к',    'l' => 'л',    'm' => 'м',    'n' => 'н',
		'o' => 'о',    'p' => 'п',    'r' => 'р',    's' => 'с',    't' => 'т',
		'u' => 'у',    'f' => 'ф',    'h' => 'х',    'c' => 'ц',    'ch' => 'ч',
		'sh' => 'ш',   'sch' => 'щ',  'ь' => '',     'y' => 'ы',    'ъ' => '',
		'e' => 'е',    'yu' => 'ю',   'ya' => 'я',

		'A' => 'А',    'B' => 'Б',    'V' => 'В',    'G' => 'Г',    'D' => 'Д',
		'E' => 'Е',    'E' => 'Е',    'ZH' => 'Ж',   'Z' => 'З',    'I' => 'И',
		'Y' => 'Й',    'K' => 'К',    'L' => 'Л',    'M' => 'М',    'N' => 'Н',
		'O' => 'О',    'P' => 'П',    'R' => 'Р',    'S' => 'С',    'T' => 'Т',
		'U' => 'У',    'F' => 'Ф',    'H' => 'Х',    'C' => 'Ц',    'CH' => 'Ч',
		'Sh' => 'Ш',   'SCH' => 'Щ',  'Ь' => '',     'Y' => 'Ы',    'Ъ' => '',
		'E' => 'Е',    'YU' => 'Ю',   'Ya' => 'Я',
	);
	$value = strtr($value, $converter);
	return $value;
}

echo translit('Сообщение');