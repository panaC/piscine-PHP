<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 26/03/18
 * Time: 13:35
 */

function ft_split($str)
{
    $arr = explode(' ', $str);
    $arr = array_filter($arr, 'strlen');
    sort($arr, SORT_STRING | SORT_NATURAL | SORT_FLAG_CASE);
    return $arr;
}

?>