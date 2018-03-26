#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 26/03/18
 * Time: 15:45
 */

if ($argc > 1)
{

    $arr = explode(' ', $argv[1]);
    array_push($arr, $arr[0]);
    unset($arr[0]);
    echo implode(" ", $arr)."\n";
}

?>