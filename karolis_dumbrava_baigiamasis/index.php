<?php
error_reporting(E_ALL & ~E_NOTICE);
$message = "";
if(isset($_POST['submit'])){
    $message = "<script>alert('Thank you, for your message! We will reach you as soon as possible.');</script>";
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Paradise</title>
    <link rel="preconnect" href="http://fonts.googleapis.com">
    <link rel="preconnect" href="http://fonts.gstatic.com" crossorigin>
    <link href="http://fonts.googleapis.com/css2?family=Inter:wght@300;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/karolis_dumbrava_baigiamasis//images/icon.ico">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>

<body>
<!-- Headeris -->
<?php include_once 'body/header.php'; ?>
    <!-- Titulinis -->
<?php include_once 'body/main-block.php'; ?>
<!-- linkas navigacijos sutvarkymui -->
<div id="store-fix"></div>
    <!-- Store -->
    <section id="store">
        <div class="container">
            <img class="icon" src="images/design/nike_logo.png" alt="nike logo">
            <!-- Navigacija -->
            <?php include_once 'body/store-navigation.php' ?>
            <!-- Div'as moteru contentui kontentui -->
            <?php include_once 'body/store-content.php'; ?>
                    <!-- Pirmas batas -->
                    <?php include_once 'body/store/women/first-shoe.php'; ?>
                    <!-- Antras batas -->
                    <?php include_once 'body/store/women/second-shoe.php'; ?>
                    <!-- Trecias batas -->
                    <?php include_once 'body/store/women/third-shoe.php'; ?>

            <!-- Men Content -->
            <div class="store-content">
                <div class="men flex-container">
                <p> Vyru pvz. </p>
                </div>
            </div>
            <!-- Kids Content -->
            <div class="store-content">
                <div class="kids flex-container">
                <p>vaiku pvz.</p>    
            </div>
            </div>
            <!-- Collections -->
            <div class="store-content">
                <div class="collections flex-container">
                    <p>Collections pvz. </p>
                </div>
            </div>
        </div>

    </section>

    <!-- Articles -->
    <div id="article-fix"></div>
    <?php include_once 'body/blog.php' ?>
    <!-- about us fix -->
    <div id="about-us-fix"></div>
    <!-- About Us -->
    <?php include_once 'body/about-us.php' ?>
    <!-- Contact Us -->
    </div>
    <?php include_once 'body/contact-storage.php' ?>

    <!-- Posting to db -->
    <?php 
    $vardas = trim($_POST['vardas']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if(!empty($vardas) && !empty($email) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Thank you,' . $vardas ', we will reach you as soon as possible.');</script>";
    }
}
    include('body/db.php');
?>

    <!-- Store Slideris -->
    <script src="js/store-slider.js"></script>
    <!-- Wmns Slideris/lightbox -->
    <script src="js/women-slider.js"></script>
    <script src="js/wmns-lightbox.js"></script>
    <!-- Men slider -->

    <!-- Kids Slider -->

</body>

</html>