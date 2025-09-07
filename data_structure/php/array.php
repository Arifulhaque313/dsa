<?php
    #array 
    $arr = array("PHP", "HTML", "CSS", "JavaScript");

    print_r($arr);
    echo "<br>";
    echo $arr[0];

    #loop through array
    echo "<br>";

    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i];
        echo "<br>";
    }


    #associative array
    $assoc_arr = array("name" => "John", "age" => 25, "city" => "New York");

    print_r($assoc_arr);
    echo "<br>";

    echo $assoc_arr["name"];
    echo "<br>";

    #loop through associative array
    foreach($assoc_arr as $key => $value){
        echo $key . ": " . $value;
        echo "<br>";
    }


    #multidimensional array
    $multi_arr = array(
        array("name" => "John", "age" => 25, "city" => "New York"),
        array("name" => "Jane", "age" => 30, "city" => "Los Angeles"),
        array("name" => "Mike", "age" => 35, "city" => "Chicago")
    );
    print_r($multi_arr);
    echo "<br>";

    echo $multi_arr[0]["name"];
    echo "<br>";


    #loop through multidimensional array
    foreach($multi_arr as $person){
        foreach($person as $key => $value){ 
            echo $key . ": " . $value;
            echo "<br>";
        }
        echo "<br>";
    }
?>