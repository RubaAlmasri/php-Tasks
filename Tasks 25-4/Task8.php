<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 8</title>
</head>

<body>
    <?php
    $units=100;
    if($units <= 50 && $units > 0){
        echo $Units * 2.50;
    }
    else if($units <= 150 && $units > 0){
        echo (50 * 2.50) + (($units-50) * 5.00);
    }
    else if($units <= 250 && $units > 0){
        echo (50 * 2.50) + (100 * 5.00) + (($units-150) * 6.20);
    }
    else if($units > 250){
        echo (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units-250) * 7.50);
    }
    else{
        echo "Wrong Value!!!";
    }
    ?>
</body>
</html>