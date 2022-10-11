<?php


            //the isset function checks if the variable is declared and not null and doesn't check if the request is an http request or not
    
        if(filter_has_var(INPUT_POST, 'id')){

                //sanitize value
            $clean_id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
                
                //validate value
            $id = filter_var($clean_id, FILTER_VALIDATE_INT, ['options' => [
                    'min_range' => 2
                ]]);
                
            echo $id === false ? 'invalid id' : $id;
            if (isset($_POST['name']) && $_POST['email']) {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);

                // show the $name and $email
                echo "Thanks $name for your subscription.<br>";
                echo "Please confirm it in your inbox of the email $email.";

            }else{
                echo 'You need to provide your name and email address.';
            }
        } else {
            echo 'id is required.';
        }

            //the filter_has_var() function doesn’t read the contents of the $_POST array. It checks the variables in the request’s body.
        
            // if (filter_has_var(INPUT_POST, 'name')) {
            //     echo 'The name variable exists:' . htmlspecialchars($_POST['name']);
            // } else {
            //     echo 'The name is required!';
            // }