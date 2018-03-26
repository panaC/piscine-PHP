#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 26/03/18
 * Time: 19:27
 */

if ($argc > 3)
{
    $key = $argv[1];
    unset($argv[0]);
    unset($argv[1]);
    $data = "";
    foreach ($argv as $val)
    {
        $arr = explode(":", $val);
        if (count($arr) == 2){
            $data[$arr[0]] = $arr[1];
        }
    }

    if (array_key_exists($key, $data))
        echo "$data[$key]\n";
}

?>