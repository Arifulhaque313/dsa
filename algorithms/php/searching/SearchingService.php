<?php
    class SercahingService{
        public $array;
        public $target;

        public function __construct($arr, $tar)
        {
            $this->array = $arr;
            $this->target = $tar;
        }

        public function show()
        {
            print_r($this->array);
        }

        public function count()
        {
            return count($this->array);
        }
        
        public function LinearSerach()
        {
            $n = $this->count();
            
            for($i = 0; $i < $n; $i++)
            {   
                if($this->array[$i] == $this->target){
                    return $i+1;
                }
            }
            return -1;
        }

        public function BinarySearch()
        {
            $n = $this->count();
            $left = 0;
            $right = $n-1;

            while($left <= $right)
            {
                $mid = intval(($left + $right)/2);
                
                if($this->array[$mid] == $this->target)
                {
                    return $mid; 
                }

                if($this->array[$mid] > $this->target)
                {
                    $left = $left-1;
                }
                else{
                    $right = $right+1;
                }

            }
            
        }

    }


    $array = [1,2,3,4,5,6,7,8,9,10];
    // $linerSearch = new SercahingService($array, 6);

    $BinarySearch = new SercahingService($array, 3);

    print_r($BinarySearch->BinarySearch());

?>