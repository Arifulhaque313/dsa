<?php
    // function BinaryS($array, $find){
    //     $n = count($array);
    //     $left = 0; 
    //     $right = $n - 1;

    //     while($left <= $right){
    //         $mid = intval(($left + $right) / 2);
            
    //         if($array[$mid] == $find){
    //             return $mid+1; 
    //         }
    //         elseif($array[$mid] > $find){
    //             $left = $left - 1;
    //         }
    //         else{
    //             $right = $right + 1;
    //         }
    //     }

    //     return -1 ; 
    // }

    function BinaryS($array, $find){
        $n = count($array);
        $left = 0;
        $right = $n-1;

        while($left <=$right){
            $mid = intval(($left+$right)/2);

            if($array[$mid] == $find ){
                return $mid+1;
            }

            elseif($array[$mid] > $find){
                $left = $left -1;
            }
            else{
                $right = $right + 1;
            }
            
        }
    }

    echo(BinaryS([2,3,6,8,12,15], 8));

?>