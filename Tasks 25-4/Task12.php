<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 12</title>
</head>

<body>
    <?php
    $grades = [60,86,95,63,55,74,79,62,50];
    $avg = (60+86+95+63+55+74+79+62+50)/9;
    switch ($avg) {
        case ($avg < 100 && $avg > 90):
            echo ('A') ;
            break;

        case ($avg < 90 && $avg > 80):
            echo ('B') ;
            break;

        case ($avg < 80 && $avg > 70):
            echo ('C') ;
            break;

        case ($avg < 70 && $avg > 60):
            echo ('D') ;
            break;

        case ($avg < 60 && $avg > 00):
            echo ('F') ;
            break;
            
        default:
            echo "Invalid!!!";
            break;
    }
    ?>
</body>
</html>