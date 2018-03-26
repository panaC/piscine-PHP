#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 26/03/18
 * Time: 18:42
 */

if ($argc == 4)
{
    if (!is_numeric($argv[1]) && !is_numeric($argv[3]))
        return;
    else
    {
        if (strcmp(trim($argv[2]), "+") == 0)
            echo ($argv[1] + $argv[3])."\n";
        if (strcmp(trim($argv[2]), "-") == 0)
            echo ($argv[1] - $argv[3])."\n";
        if (strcmp(trim($argv[2]), "*") == 0)
            echo ($argv[1] * $argv[3])."\n";
        if (strcmp(trim($argv[2]), "/") == 0)
            echo ($argv[1] / $argv[3])."\n";
        if (strcmp(trim($argv[2]), "%") == 0)
            echo ($argv[1] % $argv[3])."\n";
    }
}
else
    echo "Incorrect Parameters\n";

?>