<?php
    function mergeSort(&$arr){
        $n = count($arr);
        if($n>1){
            $mid = $n/2;

            $left = array_slice($arr, 0, $mid);
            $right = array_slice($arr, $mid);

            mergeSort($left);
            mergeSort($right);
            merge($arr, $left, $right);
        }
    }


    function merge(&$arr, $left, $right){
        $i = $j = $k = 0;

        while($i < count($left) && $j < count($right)){
            if($left[$i] < $right[$j]){
                $arr[$k++] = $left[$i++];
            }
            else{
                $arr[$k++] = $right[$j++];
            }
        }
        while($i<count($left)){
            $arr[$k++] = $left[$i++];
        }

        while($j < count($right)){
            $arr[$k++] = $right[$j++];
        }
    }

    $arr = [2,4,1,6,9,3,5,7];
    mergeSort($arr);
    echo "Sorted array: " . implode(", ", $arr);


?>