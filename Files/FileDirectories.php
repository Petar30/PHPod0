<?php
//1
//scandir
$path = "TestFolder1";
$result = scandir($path);
var_dump($result);
foreach ($result as $dir) {
    if ($dir != "." && $dir != "..") {
        echo $dir . PHP_EOL;
    }
}

//remove .
$directory = array_diff($result, ['.', '..']);
var_dump($directory);
foreach ($directory as $dir) {
    echo $dir . PHP_EOL;
}

//2,3
//is_file is_dir
$result = scandir($path);
$result = array_diff($result, ['.', '..']);
foreach ($result as $dir) {
    if (is_file($path . "/" . $dir)) {
        echo $dir . PHP_EOL;
    }
}

//create dir
$result = glob("*.php");
var_dump($result);

if (!file_exists("TestFolder3")) {
    mkdir("TestFolder3");
}

copy("TestFolder1/FileDirectories.php","TestFolder3/FileDirectories3.php");
