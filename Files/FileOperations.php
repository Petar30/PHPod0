<?php
$fileName = "MyFolder.txt";

if (file_exists($fileName)) {
    echo "File exist" . PHP_EOL;
    if (is_dir($fileName)) {
        die("it is dir");
    }else {
        echo "it is file.";
    }

    //copy file 
    copy($fileName, "CopyFile.txt");
    copy("CopyFile.txt", "CopyFile1.txt");
    //rename
    rename("CopyFile1.txt", "RenamedFile.txt");
    copy("RenamedFile.txt", "RenamedFileDeleted.txt");
    //delete
    unlink("RenamedFileDeleted.txt");

} else {
    echo "File or dir does not exist" . PHP_EOL;
    die("No such files");
}
