<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
<body>
    <?php
    //Q1
    echo'<h2>'. 'Question 1' . '</h2>';

    $temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

    
    $sum=0;
    for($i=0 ; $i<count($temp) ; $i++){
        $sum+=$temp[$i];
    }
    echo 'Average Temperature is: ' . ($sum/count($temp));

    array_unique($temp);
    sort($temp);
    echo '<br>' . 'List of five lowest temperatures: ';
    for($i=0; $i<5; $i++){
        echo $temp[$i] . ', ';
    }

    echo '<br>' . 'List of five highest temperatures: ';
    for($i=count($temp)-5; $i<count($temp); $i++){
        echo $temp[$i] . ', ';
    }


    //Q2
    echo'<h2>'. 'Question 2' . '</h2>';

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

    $Marray = array_merge($array1 , $array2);
    echo '<pre>';
    print_r($Marray);


    //Q3
    echo'<h2>'. 'Question 3' . '</h2>';

    for($i=200; $i<251; $i++){
        if($i % 4 == 0){
            echo $i ;
            if($i != 248){
                echo ', ';
            }
        }
    }


    //Q4
    echo'<h2>'. 'Question 4' . '</h2>';
    
    for($i=0; $i<10; $i++){
        echo(rand(11,20)) . ' ';
    }

    //Q5
    echo'<h2>'. 'Question 5' . '</h2>';

    $array1 = array( 0, 0, 10, 12, 6);
    $lowest;
    sort($array1);
    foreach ($array1 as $value) {
        if($value != 0){
            $lowest=$value;
            break;
        }
    }
    echo $lowest ;

    ?>
</body>
</html>