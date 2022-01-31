<?php 
    $vardas = trim($_POST['vardas']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(!empty($vardas) && !empty($email) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Thank you,' . $vardas ', we will reach you as soon as possible.');</script>";
    }
}
    include('db.php');
?>
