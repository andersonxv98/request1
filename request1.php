<?php
function showMessage($username, $email){    
    echo  "Hello <strong>$username </strong> thank you for contacting us, we will respond as soon as possible to the <strong>$email</strong>";
}

$email = $_POST['email'];
$username = $_POST['username'];

showMessage($username, $email);

?>