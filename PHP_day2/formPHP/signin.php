<?php


      $firstName = '';
        $name = '';

        //  Meke sure I 
        if (!empty($_POST)) {
            $firstName = $_POST['firstname'];
            echo 'Welcome, ' . $_POST['firstName'] . ' ' . $_POST['name'];

           

        } else {
            echo 'Please fill in your details.';
        }
        
        
        ?>