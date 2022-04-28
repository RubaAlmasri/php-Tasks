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
    $_SESSION['e']=$_POST['email'];
    $_SESSION['p']=$_POST['password'];

    if(!empty($_SESSION['e']) && !empty($_SESSION['p'])){
        echo 'Email: ' . $_SESSION['e'] . '<br>' . 'Password: ' . $_SESSION['p'];
        
    }
    else if(!(!empty($_SESSION['e'])) && !(!empty($_SESSION['p']))){
        echo 'Please enter your Email & Password';
    }
    else if(!(!empty($_SESSION['e']))){
        echo 'Please enter your Email';
    }
    else if(!(!empty($_SESSION['p']))){
        echo 'Please enter your Password';
    }
    
    
    ?>

</body>
</html>