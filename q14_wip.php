<?php

$file = file_get_contents('/private/tmp/dicti0nary_8Th64ikELWEsZFrf.txt');
$a = file_get_contents('/tmp/enc.txt');
$a = explode("\n", $a);

foreach (explode("\n", $file) as $word) {
    foreach ($a as $t) {
        $pass = explode(":", $t)[1];
        if (password_verify($pass, $word)) {
            var_dump($pass, $word);exit;
        }
        echo $pass .PHP_EOL;
    }
}
