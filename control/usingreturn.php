<?php  
    function checkuserroles($userroles) {
        if (empty($userroles)) {
            echo "Roles can not be empty" . PHP_EOL;
            return;
        }
        //do not eexecute this code when $useroles is empt
        switch ($userroles) {
            case "Admin":
                    echo "Hello admin." . PHP_EOL;
                break;
            case "Editor":
                    echo "Hello editor." . PHP_EOL;
                break;
            case "HeadAdmin":
                    echo "Hello HeadAdmin." . PHP_EOL;
                break;
            default:
                echo "Welcome $userroles.";
        }
    }
    checkuserroles ("HeadAdmin");
    checkuserroles ("Editor");
    checkuserroles ("");

