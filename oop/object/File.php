<?php
class Files
{
    function displayContent($filename): bool
    {
        $result = true;
        try {
            echo "Read the content of the file: $filename" . PHP_EOL;
            $content = file_get_contents($filename);
             echo "Displaying content of the file: $filename" . PHP_EOL;
            echo "content: " . $content . PHP_EOL;
        } catch (Exception $e) {
            $result = false;
        }
        return $result;
    }
}
$files1= new Files();
$files1->displayContent("Test.txt");

//oop brings resuability to code
$files2= new Files();
$files2->displayContent("Test1.txt");
