<?php
$text=file_get_contents('text.txt');
$count=intval($text);
$count++;
echo '当前访问次数为：'.$count;
file_put_contents('text.txt',$count);