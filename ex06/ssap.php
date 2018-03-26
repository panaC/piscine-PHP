#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 26/03/18
 * Time: 14:58
 */

unset($argv[0]);

$arr[] = "";

foreach ($argv as $key => $val) {
    foreach (explode(' ', preg_replace("/\s+/", ' ', trim($val))) as $val2)
        array_push($arr, $val2);
}

unset($arr[0]);
sort($arr);
foreach ($arr as $v)
    echo "$v\n";

?>