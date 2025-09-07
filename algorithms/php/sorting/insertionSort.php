<?php
    function IS(&$arr){
        $n = count($arr);

        for($i= 1; $i<$n; $i++){
            $key = $arr[$i];
            $j = $i-1;

            while($j >= 0 && $arr[$j] > $key){
                $arr[$j+1] = $arr[$j];
                $j--; 
            }
            $arr[$j+1] = $key;
        }
    }


    $array = [8,2,1,3,4,2,9,7];
    IS($array);

    echo "Sroted Array is ==> ", implode(",", $array);






























    // function InsertionSort(&$arr){
    //     $n = count($arr);

    //     for($i = 1; $i < $n; $i++){
    //         $key = $arr[$i];
    //         $j = $i-1;

    //         while($j>=0 && $arr[$j]> $key){
    //             $arr[$j+1] = $arr[$j];
    //             $j--; 
    //         }
    //         $arr[$j+1] = $key;
    //     }
    // }


    // $arr = [5,4,2,3,1];
    // InsertionSort($arr);
    // echo "Sorted array: " . implode(", ", $arr);

?>