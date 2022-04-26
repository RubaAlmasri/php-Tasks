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

    $sum=0;
    for($i=0; $i<31; $i++){
        $sum+=$i;
    }
    echo 'Sum = ' . $sum;


    //Q2
    echo'<h2>'. 'Question 2' . '</h2>';

    for($i=1; $i<6; $i++){
        for ($j=1; $j <6 ; $j++) {
            if($j == $i){
                echo $i . ' ';
            }
            else{
                echo 0 . ' ';
            }
        }
        echo '<br>';
    }


    //Q3
    echo'<h2>'. 'Question 3' . '</h2>';

    $num = 5 ;
    $product = 1 ;
    for($i=1; $i<=$num; $i++){
        $product *= $i;
    }
    echo $product;


    //Q4
    echo'<h2>'. 'Question 4' . '</h2>';
    
    $num1=0;
    $num2=1;
    echo $num1 . ', ' . $num2 . ', ';
    for($i=0; $i<7; $i++){
        $num3=$num1 + $num2 ;
        $num1=$num2;
        $num2=$num3;
        echo $num3 ;
        if($i != 6){
            echo ', ';
        }
        else{
            echo '...';
        }
    }

    //Q5
    echo'<h2>'. 'Question 5' . '</h2>';

    $count=1;
    for($i=1; $i<6; $i++){
        for($j=1; $j<=$i; $j++){
            echo $count . ' ';
            $count++;
        }
        echo '<br>';
    }

    ?>
</body>
</html>