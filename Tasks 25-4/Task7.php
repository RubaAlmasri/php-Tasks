<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 7</title>
</head>

<body>
    <?php
    $num1=5;
    $num2=55;
    $num3=9;
    if($num1 >= $num2){
        if($num1 >= $num3){
            echo $num1;
        }
        else{
            echo $num3;
        }
    }
    else if($num2 > $num1){
        if($num2 >= $num3){
            echo $num2;
        }
        else{
            echo $num3;
        }
    }
    ?>
</body>
</html>