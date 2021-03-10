<?php
(int)$val=20;
(string)$txtVal='20';
print strcmp($val,$txtVal) . "\n";

if ($val===$txtVal) {
    echo 'Son iguals';
}else{
    echo 'No son iguals';
}
