<?php 
    $date1= time();
    sleep(1);
    $date2= time();
    $diff= ($date2 - $date1) / 60;
    echo $diff;
    $start= date_create("2023/6/28 15:00:00");
    $end= date_create("2023/7/31 16:00:00");
    $diff= date_diff($start,$end);
    print_r($diff);

