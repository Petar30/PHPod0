<?php

    $name= "Petar Terzic";
    $number= 3;
    //write a block of strings with heredoc
    echo <<<  DOC_LABEL
    You can write anything insitd this
    "Sve moze da ima"
    'ovo isto' ................
    $nmae know how to write php
    ($number * 10)
    NEw lines and strings.
    (true) ? "Some efect" : "no efect";
    PHP_EOL
    <strong> is this bold</strong>
    apart from variable nothing will work.


    DOC_LABEL;