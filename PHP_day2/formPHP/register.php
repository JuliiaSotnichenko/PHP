<?php




if (!empty($_POST)) {
    echo 'You clicked the form';

    // Seve the email 
    $email = trim($_POST['email']);
    // $password = trim($_POST['password']);

    // $email = htmlspecialchars($email);

    $sanitizeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);


    // Make sure it's a valid
    if (filter_var($sanitizeEmail, FILTER_VALIDATE_EMAIL)) {
        echo 'Welcome';
    }else{
        echo 'Email is not valid'; 
    }
} else {
    echo 'You should not be there';
}









?>