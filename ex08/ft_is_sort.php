<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 26/03/18
 * Time: 15:55
 */

function ft_is_sort($arr)
{
    $default = $arr;
    sort($arr);

    $flag = true;
    foreach($arr as $key => $value)
        if($value != $default[$key])
            $flag = false;

    return $flag;
}

?>