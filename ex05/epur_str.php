#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 26/03/18
 * Time: 14:04
 */

if ($argc == 2){
    echo preg_replace("/\s+/", ' ', trim($argv[1]))."\n";
}

?>
