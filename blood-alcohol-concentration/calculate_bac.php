<?php
    $weight=$_POST["weight"];
    $alcohol=$_POST["alcohol_content"];
    $time=$_POST["time_elapsed"];
    $gender=$_POST["gender"];
    $unit=$_POST["unit"];
    $const=0;
    $weight_const=0;

    if($gender=="male")
    {
        $const=0.73;
    }
    else if($gender=="female")
    {
        $const=0.66;
    }

    if($unit=="lbs")
    {
        $weight_const=$weight;
    }
    else if($unit=="kg")
    {
        $weight_const=$weight*2.2046;
    }
    $BAC=($alcohol*5.14)/($weight_const*$const)-(0.015*$time);
    echo "The Blood alcohol level is $BAC %.  \n";

    if($BAC>0.08)
    {
        echo "Warning! please consider not riding!";
    }
    else
    {
        echo "You are good to Ride!";
    }


?>