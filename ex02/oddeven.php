#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pierre
 * Date: 26/03/18
 * Time: 13:16
 */

while (42) {
    echo "Entrez un nombre: ";
    $line = trim(fgets(STDIN));

    if (is_numeric($line)) {
        if (($line % 2) == 0)
            echo "Le chiffre " . $line . " est Pair\n";
        else
            echo "Le chiffre " . $line . " est Impair\n";
    } else if (feof(STDIN)) {
        echo "\n";
        exit();
    }
    else
        echo "'$line' n'est pas un chiffre\n";
}

?>