<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 11</title>
</head>

<body>
    <?php
    $num1 = 4;
    $num2 = 0;
    $op = '/';
    switch ($op) {
        case '+':
            echo ($num1+$num2) ;
            break;

        case '-':
            echo ($num1-$num2) ;
            break;

        case '*':
            echo ($num1*$num2) ;
            break;

        case '/':
            if($num2 == 0){
                echo "Division by zero!!!";
                break;
            }
            else{
                echo ($num1/$num2) ;
                break;
            }
            

        default:
            echo "Incorrect operator!!!";
            break;
    }
    ?>
</body>
</html>