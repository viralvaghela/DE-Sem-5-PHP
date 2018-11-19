<?php
    define("PI",3.14);
    $r=5;
    $ans=PI*$r*$r;
    echo "Radius(in double)=$ans"."<br>";
    settype($ans,"int");
    echo "Radius(in integer)=$ans";
?>