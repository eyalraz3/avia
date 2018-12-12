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
<div class="facebook-div">
    <a href="https://www.facebook.com/aviafashion/" target="_blank" class="fa-facebook" >
        <img src="img/facebook-icon.png" alt="דף הפייסבוק שלנו" title="אביה בגדי מעצבים" class="facebook-logo"/></a>
    <div class="fb-page" data-href="https://www.facebook.com/aviafashion" data-tabs="timeline"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/aviafashion" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/aviafashion">‏אביה בגדי מעצבים ומטפחות‏</a></blockquote></div>
</div>
<section class="main-section">
    <header>
        <a target="main-frame" href="winter.html"><img   alt= "Logo" src="img/logo.jpg"  height="150" title="אביה בגדי מעצבים" id="logo"></a>
        <div id="search" class="">
            <form  method="get">
                <button id="search-button" type="submit">  <img src="img/search.png" alt="search" title="חפש" id="search-img"/> </button>
                <input id="search-input" placeholder="חיפוש" >
            </form>


        </div>
        <img src="img/cart.png" alt="עגלת קניות" title="בקרוב..." class="cart"/>

    </header>
    <nav>
        <div class="navbar">
            <div class="dropdown">
                <a  target="main-frame" href="winter.html" class="dropbtn"> דף הבית
                </a>
            </div>
            <div class="dropdown">
                <a  href="gallery.html" target="main-frame" class="dropbtn" onload="setHeight(document.querySelector('#main_frame'));"> מוצרים
                </a>

                <div class="dropdown-content">
                    <a target="main-frame" href="product.html" onclick="setHeight(document.querySelector('#main_frame'));">בגדי מעצבים</a>
                    <a target="main-frame" href="product.html">מטפחות</a>
                    <a target="main-frame" href="product.html">בגדי בסיס</a>
                </div>
            </div>
            <div class="dropdown">
                <a target="main-frame" href="http://www.ynet.co.il" class="dropbtn">אקססוריז
                </a>
                <div class="dropdown-content">
                    <a target="main-frame" href="product.html">כיסויי ראש</a>
                    <a target="main-frame" href="product.html">ביגוד נוסף</a>
                    <a target="main-frame" href="product.html">תכשיטים</a>
                </div>

            </div>
            <div class="dropdown">
                <a target="main-frame" href="about.html" class="dropbtn">אודות

                </a>

            </div>

        </div>
    </nav>


    <div id="frame-container">
        <?php
        require 'winter.html'
        ?>
        <!--

        <iframe name="main-frame" src=winter.html id="main_frame" onload="setHeight(this)"></iframe>-->
    </div>
    <a href="tel:+97254-7493523">
        <img id="call_img" src="img/call.png" alt="התקשר" title="התקשר אלינו" class="fixed-img"/>
    </a>
    <a href="https://www.waze.com/ul?ll=32.19889344%2C35.01098156&navigate=yes&zoom=17">
        <img id="navigate_img" src="img/waze_logo.png" alt="נווט" title="נווט" class="fixed-img"/>
    </a>

    <footer id="bottom-div">
        <div class="bottom-divs" id="bottom-div1">
            <ul>
                <li><a href="winter.html#" target="main-frame"> דף הבית</a></li>
                <li><a href="about.html#" target="main-frame"> אודות</a></li>
                <li><a href="https://www.facebook.com/aviafashion/" target="_blank"> דף הפייסבוק שלנו</a></li>


            </ul>


        </div>
        <div class="bottom-divs" id="bottom-div2">
            <ul>
                <li><a href="sapakim.html#" target="main-frame"> הספקים שלנו</a></li>

                <li><a href="contact.html#" target="main-frame"> צור קשר</a></li>

            </ul>
        </div>
        <div class="bottom-divs" id="bottom-div3">
            <form action="newsletter.php" method="post" id="newsletter-validate-detail-footer" class="newsletter-form">
                <div class="block-content subscribe-footer">
                    <div class="input-box">
                        <label for="newsletter">הרשמה לניוזלטר שלנו:</label>
                        <input type="email" name="email" id="newsletter" placeholder="כתובת מייל" title="כתובת מייל" class="input-text required-entry validate-email subscribe-mail">
                        <button type="submit" title="הרשמה" class="button">
                            <span>הרשמה</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </footer>

</section>
<script src="script/main.js"></script>
</body>

</html>
