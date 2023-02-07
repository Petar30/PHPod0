<?php
class User
{
    function fetchUser($id): bool
    {
        $result= false;
        echo "Query the database for id: $id" . PHP_EOL;
        $result=true;
        echo "Display the records" . PHP_EOL;
        return $result;

    }
    function deleteUser($id): bool
    {
        $result=true;
        echo "deleting the records for the user id: $id" . PHP_EOL;
        return $result;
    }

}

$user1 = new User();
$user1->fetchUser(101);
$user1->fetchUser(102);
$user1->deleteUser(101);
