#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 26/03/18
 * Time: 18:52
 */

if ($argc == 2) {
    $nb = preg_split("/[\s*\-\+%\/]+/", trim($argv[1]));
    $op = preg_split("/[\s0-9]+/", trim($argv[1]));
    if (count($nb) == 2 && count($op) == 3 && is_numeric($nb[0]) && is_numeric($nb[1]))
    {
        if (strcmp(trim($op[1]), "+") == 0)
            echo ($nb[0] + $nb[1])."\n";
        else if (strcmp(trim($op[1]), "-") == 0)
            echo ($nb[0] - $nb[1])."\n";
        else if (strcmp(trim($op[1]), "*") == 0)
            echo ($nb[0] * $nb[1])."\n";
        else if (strcmp(trim($op[1]), "/") == 0)
            echo ($nb[0] / $nb[1])."\n";
        else if (strcmp(trim($op[1]), "%") == 0)
            echo ($nb[0] % $nb[1])."\n";
        else
            echo "Syntax Error\n";
    }
    else
        echo "Syntax Error\n";
}
else
    echo "Incorrect Parameters\n";

?>