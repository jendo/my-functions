<?php

/**
 * W3r Basic Exercise 35
 *
 * @param array $list1
 * @return array
 */
function removeDuplicatesList(array $list1): array
{
    return array_values(array_unique($list1));
}


/**
 * @param string $file
 * @return string
 */
$file = 'FunctionFileExistAndSize.php';
function FileExistAndSize(string $file): string
{

    if (file_exists($file)) {
        echo 'Size of a file is: ' . filesize($file) . ' bytes.';
    } else {
        echo 'This file doesnt exist.';
    }
}