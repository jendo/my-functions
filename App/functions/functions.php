<?php

/**
 * Exercise 4.1
 *
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
 * 4.3.2
 *
 * @param string $file
 * @return void
 * i
 * ng
 */
function fileExistAndSize(string $file): void
{

    if (file_exists($file)) {
        echo 'Size of a file is: ' . filesize($file) . ' bytes.';
    } else {
        echo 'This file doesnt exist.';
    }
}

/**
 * Exercise 4.3.3
 *
 * @param string $filename
 * @param string $text
 * @return void
 */
function writingToAFile(string $filename, string $text): void
{
    if (file_exists($filename) === false) {
        echo sprintf('File %s exist', $filename);
        return;
    }
    $myFile = fopen($filename, 'wb+');
    if ($myFile === false) {
        echo sprintf('File %s was not open.', $filename);
        return;
    }
    if (fwrite($myFile, $text)=== false){
        echo sprintf('Text %s was not wrote to the file %s.', $text, $filename);
        return;
    }
    if (fclose($myFile) === false) {
        echo sprintf('File %s can not be closed', $filename);
        return;
    }
    echo sprintf('Text %s was written to the file %s',$text, $filename);
}

/**
 * Exercise 4.4
 *
 * @param array $words
 * @return void
 */
function randomWords(array $words):void
{
    $rand_keys = array_rand($words);
    do {
        if (isset($words[$rand_keys])) {
            echo($words[$rand_keys] . "\n");
            unset($words[$rand_keys]);
        } elseif (empty($words($rand_keys))) {
            echo 'This word have been chosen already.';
        }
    } while ($words && count(array_filter($words, 'is_null')) !== count($words));
}
