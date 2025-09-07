<?php
    function SelectSort(&$arr){
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

   $arr = array(13,12,1,2,4,6,5,9);

   SelectSort($arr);

   echo "sorrted arry is \n";
   for($i = 0; $i < count($arr); $i++){
    echo $arr[$i] ." ";
   }

























    // function selection_sort(&$arr, $n)  
    // { 
    //     for($i = 0; $i < $n ; $i++) 
    //     { 
    //         $low = $i; 
    //         for($j = $i + 1; $j < $n ; $j++) 
    //         { 
    //             if ($arr[$j] < $arr[$low]) 
    //             { 
    //                 $low = $j; 
    //             } 
    //         } 
            
    //         // swap the minimum value to $ith node 
    //         if ($arr[$i] > $arr[$low]) 
    //         { 
    //             $tmp = $arr[$i]; 
    //             $arr[$i] = $arr[$low]; 
    //             $arr[$low] = $tmp; 
    //         } 
    //     } 
    // } 
    
    // // Driver Code 
    // $arr = array(64, 25, 12, 22, 11); 
    // $len = count($arr); 
    // selection_sort($arr, $len); 
    // echo "Sorted array : \n";  
    
    // for ($i = 0; $i < $len; $i++)  
    //     echo $arr[$i] . " "; 

?>