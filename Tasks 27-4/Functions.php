<!DOCTYPE html>
<html>
<body>

<?php

//Q1
echo '<h1>' . 'Question 1' . '</h1>';

$num= 35;
$check=0;
for ($i = 2; $i < $num; $i++)
   {
      if ($num % $i == 0){
          $check=1;
      }
   }
if($check == 0){
    echo $num . ' is a prime number.';
}
else {
    echo $num . ' is a non-prime number.';
}


//Q2
echo '<h1>' . 'Question 2' . '</h1>';

$str='remove';
echo (strrev($str));

function rev($s){
    $str2=' ';
    for($i=strlen($s)-1; $i>=0; $i--){
       $str2= $str2 . $s[$i];
    }
    return $str2;
}
echo ('<br>'.rev($str));


//Q3
echo '<h1>' . 'Question 3' . '</h1>';

$str1= 'remove';
if(ctype_lower($str1) == 1){
    echo 'Your string is OK' ;
}
else{
    echo 'Your string NOT OK';
}

//Q4
echo '<h1>' . 'Question 4' . '</h1>';

$x=12;
$y=10;

function swap1($num1,$num2){
    $temp=$num2;
    $num2=$num1;
    $num1=$temp;
    return 'y = ' . $num2 . '<br>' .' x = ' . $num1;
}
echo (swap1($x,$y));


//Q5
echo '<h1>' . 'Question 5' . '</h1>';

$x=12;
$y=10;

function swap2($num1,$num2){
    $temp=$num2;
    $num2=$num1;
    $num1=$temp;
    return 'y = ' . $num2 . '<br>' .' x = ' . $num1;
}
echo (swap2($x,$y));


//Q6
echo '<h1>' . 'Question 6' . '</h1>';

$armstrong= 371;

function check($num){
    $sum=0;
    $s=(string)$num;
    for($i=0; $i< strlen($s); $i++){
        $temp=(integer)$s[$i];
        $sum+= ($temp*$temp*$temp);
    }
    if($sum == $num){
        return $num . ' is Armstrong Number.';
    }
    else{
        return $num . ' is NOT Armstrong number.';
    }
}
echo (check($armstrong));


//Q7
echo '<h1>' . 'Question 7' . '</h1>';

$s='Eva, can I see bees in a cave?';
function palindrome($s){
    if($s == strrev($s)){
        return 'Yes it is a palindrome ';
    }
    else{
        return 'No it is a non-palindrome ';
    }
}
echo (palindrome($s));


//Q8
echo '<h1>' . 'Question 8' . '</h1>';

$arr= array(2, 4, 7, 4, 8, 4);
function rem_dup($a){
    return array_unique($a);
}
echo '<pre>';
print_r (rem_dup($arr));




?>

</body>
</html>
