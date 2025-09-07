<?php
    class Search{

        public function lin($array, $findData){
            for($i = 0; $i< count($array) ; $i++){
                if($array[$i] == $findData){
                    return $i;
                }
            }

            return -1 ;
        }


        public function Bin($array, $findData){
            $n = count($array); 
            $left = 0; 
            $right = $n-1;

            while($left != $right){
                $mid = abs(($left+$right)/2);
                if($array[$mid] == $findData){
                    return $mid;
                }
                elseif($array[$mid] > $findData){
                    $left = $mid-1;
                }
                else{
                    $left = $mid+1;
                }
            }
        }
    }


    $Searching2 = new Search();

    echo($Searching2->lin([1,2,3,4,5], 3));
    echo($Searching2->Bin([1,2,3,4,5], 6));
?>