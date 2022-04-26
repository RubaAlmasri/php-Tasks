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

    $c=65;
    for($i=0;$i<5;$i++){  
        for($j=5-$i;$j>1;$j--){  
        echo 'A ' . ' '; 
        }
        for($k=5-$i; $k<=5;$k++){
            echo chr($c) . ' ';
        }  
        $c++;
        echo "<br>";  
    }  


    //Q2
    echo'<h2>'. 'Question 2' . '</h2>';

    $c=1;
    for($i=0;$i<5;$i++){  
        for($j=5-$i;$j>1;$j--){  
        echo 1 . ' '; 
        }
        for($k=5-$i; $k<=5;$k++){
            echo $c . ' ';
        }  
        $c++;
        echo "<br>";  
    }  


    //Q3
    echo'<h2>'. 'Question 3' . '</h2>';

    echo '<table border="1px" cellpadding="3px" cellspacing="0px">';

    for($i=1; $i<=6; $i++){
        echo '<tr>';
        for($j=1; $j<6; $j++){
            echo '<td>' . $j .'*' . $i . ' = ' . $j*$i ;
        }
        echo '</tr>';
    }

    echo '</table>';


    //Q4
    echo'<h2>'. 'Question 4' . '</h2>';
    
    for ($i=1; $i <= 50; $i++) { 
        if($i % 3 == 0 && $i % 5 == 0 ){
            echo ' FizzBuzz ';
        }
        else if($i % 3 == 0){
            echo ' Fizz ';
        }
        else if($i % 5 == 0){
            echo ' Buzz ';
        }
        else {
            echo $i . ' ';
        }
    }

    //Q5
    echo'<h2>'. 'Question 5' . '</h2>';

    for($i=1; $i<6; $i++){
        $count=0; 
        if($i==1){
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        }
        else if($i==2){
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        }
        else if($i==3){
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
        }
        else if($i==4){
            echo "&nbsp&nbsp&nbsp";
        }
        foreach (range('A' , 'E' ) as $value) {
            echo $value . '&nbsp&nbsp';
            $count++;
            if($count == $i){
                echo '<br>';
                break;
            }
        }
    }
    for($i=4; $i>0; $i--){
        $count=0;
        if($i==1){
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        }
        else if($i==2){
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        }
        else if($i==3){
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
        }
        else if($i==4){
            echo "&nbsp&nbsp&nbsp";
        }
        foreach (range('A' , 'E' ) as $value) {
            echo $value . '&nbsp&nbsp';
            $count++;
            if($count == $i){
                echo '<br>';
                break;
            }
        }
    }

    ?>
</body>
</html>