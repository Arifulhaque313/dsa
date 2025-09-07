<?php
    function sorting4(&$arr){
        $n = count($arr);
        for($i=0; $i<$n; $i++){
            $min = $i;

            for($j = $i+1; $j < $n; $j++){
                if($arr[$min] > $arr[$j]){
                    $min = $j;
                }
            }

            if($arr[$i] > $arr[$min]){
                $temp = $arr[$i];
                $arr[$i] = $arr[$min];
                $arr[$min] = $temp;
            }
        }
    }

    $array = array(6,21,12,11,6,5,4,1,9);
    sorting4($array);
    echo "Sorted array: " . implode(", ", $array);
?>