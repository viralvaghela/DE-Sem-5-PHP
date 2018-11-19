<?php
    $f1=0;
    $f2=1;
    $n=5;
    echo $f1."<br>".$f2."<br>";
    for($i=0;$i<$n;$i++)
    {
        $f=$f1+$f2;
        $f1=$f2;
        $f2=$f;
        echo $f."<br>";
    }
?>