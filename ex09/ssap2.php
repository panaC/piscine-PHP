#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 26/03/18
 * Time: 16:00
 */

function isAscii($str) {
    return (!preg_match('/[^A-Za-z0-9]/', $str));
}

unset($argv[0]);
$arr[] = "";

foreach ($argv as $key => $val) {
    foreach (explode(' ', preg_replace("/\s+/", ' ', trim($val))) as $val2)
        array_push($arr, $val2);
}

unset($arr[0]);
usort($arr, function ($a, $b){
    if (is_numeric($a) && isAscii($b))
        return 1;
    if (!isAscii($a) && is_numeric($b))
        return 1;
    if (!isAscii($a) && isAscii($b))
        return 1;
    if (!is_numeric($a) && !is_numeric($b)) {
        return strnatcasecmp($a, $b);
    }
    else if (is_numeric($a) && is_numeric($b))
        return $b - $a;
    else if (!isAscii($a) && isAscii($b))
        return $b - $a;
});

foreach ($arr as $v)
    echo "$v\n";

?>