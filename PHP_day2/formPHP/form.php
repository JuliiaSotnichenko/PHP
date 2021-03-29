
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // When the server 
    // _GET it will send directly data server usung URL



    // $_Post  will send data without editing the URL 
    //  Use post when information are sensitive 

        // var_dump($_GET);

        // Inintialize empty variables for the form 
        $firstName = '';
        $lastName = '';

        //  Meke sure I 
        if (!empty($_GET)) {
            $firstName = $_GET['firstname'];
            echo 'Welcome, ' . $_GET['firstName'] . ' ' . $_GET['lastName'];
        }


    ?>
        <form action="" method="GET">
            <input type="text" name="firstName" placeholder="Give your first name" 
            value="<?php echo $firstName ?>">
            <br>
            <input type="text" name="lastName" placeholder="Give your last name"  
            value="<?php echo $lastName?>">
            <br>
            <input type="submit" value="SEND">
    </form>
<!-- method How -->


<hr>


</body>
</html>











