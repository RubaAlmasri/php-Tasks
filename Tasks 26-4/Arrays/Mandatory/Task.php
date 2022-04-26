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

    $colors = array('white', 'green', 'red');
    sort($colors);
    echo "<ul>";
    foreach($colors as $value){
        echo '<li>'. $value .'</li>';
    };
    echo "</ul>";


    //Q2
    echo'<h2>'. 'Question 2' . '</h2>';

    $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

    asort($cities);
    foreach($cities as $key=>$value){
        echo 'The capital of '.$key . ' is ' . $value . '<br>'; 
    }

    //Q3
    echo'<h2>'. 'Question 3' . '</h2>';

    $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
    echo $color[4];


    //Q4
    echo'<h2>'. 'Question 4' . '</h2>';

    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    asort($fruits);
    foreach($fruits as $key=>$value){
        echo $key . ' = ' . $value . '<br>' ;
    }

    //Q5
    echo'<h2>'. 'Question 5' . '</h2>';

    $words =  array("abcd","abc","de","hjjj","g","wer");
    $sortest=$words[0];
    $longest=$words[0];
    foreach ($words as $value) {
        foreach($words as $v){
            if(strlen($v) < strlen($value)){
                $shortest=$v;
            }
        }
    }foreach ($words as $value) {
        foreach($words as $v){
            if(strlen($v) > strlen($value)){
                $longest=$v;
            }
        }
    }
    echo 'The shortest array length is ' . strlen($shortest) . '. The longest array length is ' . strlen($longest);

    ?>
</body>
</html>