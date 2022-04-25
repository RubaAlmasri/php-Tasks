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
    $year=2013;
    if(($year % 4 == 0))
    {
        echo $year ." ". "is a leap year.";
    } 
    else
    {
        echo $year . " " . "This year is not a leap year.";
    }
    ?>
</body>
</html>