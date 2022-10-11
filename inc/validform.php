<?php

const NAME_REQUIRED = 'Please enter your name';
const EMAIL_REQUIRED = 'Please enter your email';
const EMAIL_INVALID = 'Please enter a valid email';


//sanitize and validate name
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$inputs['name'] = $name;

    if($name){
        $name =trim($name);

        if($name === ''){
            $errors['name'] = NAME_REQUIRED;
        }
    }else{
        $errors['name'] = NAME_REQUIRED;
    }

//sanitize and validate email
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;

        if($email){
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
            if ($email === false) {
                $errors['email'] = EMAIL_INVALID;
            }
        }else{
            $errors['email'] = EMAIL_REQUIRED;
        }

?>


<?php if (count($errors) === 0) : ?>
    
    <section>
        <h2>
            Thanks <?php echo htmlspecialchars($name) ?> for trying this out!
        </h2>
        <p>This your email:</p>
        <ol>
            <li>Your email (<?php echo htmlspecialchars($email) ?>) </li>
        </ol>
    </section>

<?php endif ?>