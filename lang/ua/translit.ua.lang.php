<?php
/**
 * Таблиця транслітерації ГОСТ 7.79-2000 / ISO-9, система Б
 * В порядку зменшення пріоритету при обробці
 */

$cot_translit = array(
'ці' => 'ci',
'Ці' => 'Ci',
'ЦІ' => 'CI',
'це' => 'ce',
'Це' => 'Ce',
'ЦЕ' => 'CE',
'ци' => 'cy',
'Ци' => 'Cy',
'ЦИ' => 'CY',
'ц' => 'cz',
'Ц' => 'Cz',
'ч' => 'ch',
'Ч' => 'Ch',
'щ' => 'shh',
'Щ' => 'Shh',
'ш' => 'sh',
'Ш' => 'Sh',
'ж' => 'zh',
'Ж' => 'Zh',
'ї' => 'yo',
'Ї' => 'Yo',
'ю' => 'yu',
'Ю' => 'Yu',
'я' => 'ya',
'Я' => 'Ya',
'а' => 'a',
'А' => 'A',
'б' => 'b',
'Б' => 'B',
'в' => 'v',
'В' => 'V',
'г' => 'g',
'Г' => 'G',
'д' => 'd',
'Д' => 'D',
'е' => 'e',
'Е' => 'E',
'з' => 'z',
'З' => 'Z',
'і' => 'i',
'І' => 'I',
'й' => 'j',
'Й' => 'J',
'к' => 'k',
'К' => 'K',
'л' => 'l',
'Л' => 'L',
'м' => 'm',
'М' => 'M',
'н' => 'n',
'Н' => 'N',
'о' => 'o',
'О' => 'O',
'п' => 'p',
'П' => 'P',
'р' => 'r',
'Р' => 'R',
'с' => 's',
'С' => 'S',
'т' => 't',
'Т' => 'T',
'у' => 'u',
'У' => 'U',
'ф' => 'f',
'Ф' => 'F',
'х' => 'x',
'Х' => 'X',
'и' => 'y',
'И' => 'Y',
'є' => 'e`',
'Є' => 'E`',
'ґ' => 'g`',
'Ґ' => 'G`',
'ь' => '`'
);

/**
 * Зворотне перетворення (backwards transition)
 */

$cot_translitb = array_flip($cot_translit);

?>