<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $firstN=$_GET['fnum'];
    $secondN=$_GET['snum'];
    $operator=$_GET['op'];

    if(!empty($firstN) && !empty($secondN) && !empty($operator)){
    switch ($operator) {
        case '+':
            echo $firstN . ' + ' . $secondN . ' = ' . ($firstN + $secondN );
            break;
        case '-':
            echo $firstN . ' - ' . $secondN . ' = ' . ($firstN - $secondN );
            break;
        case '*':
            echo $firstN . ' * ' . $secondN . ' = ' . ($firstN * $secondN );
            break;
        case '/':
            if($secondN == 0){
                echo 'Division by Zero!!! ';
            }
            else{
                echo $firstN . ' / ' . $secondN . ' = ' . ($firstN / $secondN );
            }
            break;
        default:
            echo 'Wrong operator!!!';
            break;
    }
}
else{
    echo 'Please fill all the fields!!!';
}
    ?>

</body>
</html>