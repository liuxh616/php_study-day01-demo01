<?php
$a = "hello";
$$a = "world !";
echo "$a ${$a}";
echo "\n";
echo $$a;
