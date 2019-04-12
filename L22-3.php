<?php

function multiply($arr) {
        $result = 1;
        foreach ($arr as $value) {
                $result *= $value;
}
        return $result;
}

$a = array(1, 3, 5, 7, 9);
echo multiply($a);
echo "\n";
?>
