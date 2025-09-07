<?php
    function BubbleSort1(&$arr)
    {
        $n = count($arr);

        for($i = 0; $i < $n; $i++)
        {
            for ($j = 0; $j < $n-$i-1; $j++)
            {
                if($arr[$j] > $arr[$j+1])
                {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
    }

    $arr = array(2,1,4,5,7,9,8,6);
    BubbleSort1($arr);
    echo "Shorted Array ".implode(",", $arr);
?>