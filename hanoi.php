<?php
$i = 1;
function hanoi($plates, $from, $to)
{
    global $i;
    while ($plates > 0) {
        $i++;
        $using = 6 - ($from + $to);
        hanoi(--$plates, $from, $using);
        print "Move plate from $from to $to; ";
        $from = $using;
    }
}
