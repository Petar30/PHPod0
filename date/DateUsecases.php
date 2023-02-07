<?php
echo date_create("now")->format("Y-m-d H:i:s") . PHP_EOL;
echo date_create("+1 day")->format("Y-m-d H:i:s") . PHP_EOL;
echo date_create("-1 day")->format("Y-m-d H:i:s") . PHP_EOL;

$strtime = strtotime("2023-01-27 1:00:00");
echo date("d:m:y H:i:s", $strtime) . PHP_EOL;
//milisec and they numbers
if (time() >= $strtime) {
    echo "time is ahead";
} else {
    echo "time is not ahead";
}
