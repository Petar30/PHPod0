<?php
class Files
{
    function displayContent($filename)
    {
        $idegas = file_get_contents($filename);
        print $idegas . PHP_EOL;
    }
    function getContent($filename)
    {
        $idegas2 = file_get_contents($filename);
    }
}
$user1= new Files();
$filename= "Test.txt";
$user1->displayContent($filename);
$user1->getContent($filename);