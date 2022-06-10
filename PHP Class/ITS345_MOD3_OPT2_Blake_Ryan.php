<?php
function push_zeros($list) {
    for ($i = 0; $i < (count($list)-1); $i++) {
        if ($list[$i] == 0) {
            array_splice($list, $i, 1);
            array_push($list, 0);
        }
    }
    return $list;
}

$new_list = push_zeros(array(7,10,0,9,11,0,17));

print_r($new_list);