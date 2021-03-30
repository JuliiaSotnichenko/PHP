<?php


      $firstName = '';
        $name = '';

        //  Make sure I 
        if (!empty($_POST)) {
            // Validations
            
            if(empty($_POST['firstName'] or empty($_POST['name'])))
                echo 'First and lastname are mandatory';
            elseif (!(strlen($_POST['email']) > 8 && 
                strlen($_POST['email']) < 50 ))
                    echo 'Your email must be';
            elseif (!(strpos($_POST['email'], '@')))
                    echo 'Your email';
            elseif (strlen($_POST['password']) != 8) 
                        echo 'Your password must be beetween 8 and 50';
            else {
                    echo 'Welcome ' . $_POST['firstName'] . '!';
                    if(isset($_POST['scales']))
                    echo 'You clicked the checkbox';
            else 
                echo 'You didnt clicked the checkbox';
                   
                }
                if(empty($name)) {
                    
                }


        }

            

           

        
        
        
        
        ?>