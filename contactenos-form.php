<?php
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Cartagena FlyBoard'; 
    $to = 'info@cartagenaflyboard.com'; 
    $subject = 'Lead form cartagenafleboa.kizzle';

    $body = "From: $name\n Phone: $telephone\n E-Mail: $email\n Message:\n $message";
    if ($_POST['submit']) {
    /* Anything that goes in here is only performed if the form is submitted */
    if (mail ($to, $subject, $body, $from)) { 
    	header('Location: gracias.html');
       } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}

?>
