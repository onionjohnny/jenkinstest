<?php

    $y = rand(5,20);
    $x = 1;
    while($x < $y){
        echo ($x." - this is a test for Jenkins and will print $y lines<br />");
        echo ($x." - Added this line directly in GIT - $y lines<br />");
        echo ($x." - Added another line @ 10:13 directly in GIT - $y lines<br />");
        $x++;
    }
    echo('another line added in GitHub');
    echo('End added by onionjohnny');

?>
