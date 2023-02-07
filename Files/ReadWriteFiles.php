<?php

//read file 
// 1 step open file
// 2 step read file content
// 3 step close file

//file modes
//r - read mode
// w - pisanje
// a - append

//method 1
$fileName = "content.txt";

//check if file exist or not
if (!file_exists($fileName)) {
    if (!is_file($fileName)) {
        die("file does not exist");
    }
}

//read
$content = file_get_contents($fileName);
//print content of the file
echo $content . PHP_EOL;

//method 2
//open file
$fileHandler = fopen($fileName, "r");
$fileSize = filesize($fileName);
//read content
$content = fread($fileHandler, $fileSize);
echo $content . PHP_EOL;

//close file
fclose($fileHandler);

//write operation - meth 1
$fileHandler = fopen($fileName, "w") or die("unable to write the file");
fwrite($fileHandler, "How was your day?");
fclose($fileHandler);

//write operation - meth 2

$filename1 = "NewFile.txt";
file_put_contents($filename1, "this is modified content");

