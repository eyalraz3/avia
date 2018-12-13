<!DOCTYPE html>

<html >

<head>
    <title>אביה בגדי מעצבים</title>
    <!--Meta Tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Eyal Raz">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="style/main.css" />
    <script src="script/product.js"></script>
    <script src="script/main.js"></script>

</head>
<body dir="rtl">
<?php
echo '<!--  imported from facebook-sidebar.html --start -->';
include_once 'facebook-sidebar.html';
echo '<!--  imported from facebook-sidebar.html--end -->';
?>
<section class="main-section">

    <?php
    echo '<!--  imported from header.html--start -->';
    include_once 'header.html';
    echo '<!--  imported from header.html--end -->';
    echo '<!--  imported from navbar.html--start -->';
    include_once 'navbar.html';
    echo '<!--  imported from navbar.html--end -->';
    ?>

    <div id="frame-container">
        <?php
        include_once 'winter.html'
        ?>
<!--the following elements are fixed and appears only on small screen (@media)-->
    </div>
    <a href="tel:+97254-7493523">
        <img id="call_img" src="img/call.png" alt="התקשר" title="התקשר אלינו" class="fixed-img"/>
    </a>
    <a href="https://www.waze.com/ul?ll=32.19889344%2C35.01098156&navigate=yes&zoom=17">
        <img id="navigate_img" src="img/waze_logo.png" alt="נווט" title="נווט" class="fixed-img"/>
    </a>
<?php
    echo '<!--  imported from bottom.php--start -->';
    include_once 'bottom.php';
    echo '<!--  imported from bottom.php--end -->';
    ?>
</section>
<script src="script/main.js"></script>
</body>

</html>
