<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>מוצרים</title>
    <link rel="stylesheet" href="style/gallery.css">
</head>
<body>
<aside>
    <form method="get" action="form.php">
        <div class="side-item">
            <b onclick="openMe(this.parentElement)"> מידות</b>
            <div class="sub-content">
                <input type="checkbox" value="XS" name="size" id="XS" class="checkbox">
                <label for="XS">XS</label>
                <input type="checkbox" value="S" name="size" id="S" class="checkbox">
                <label for="S">S</label>
                <input type="checkbox" value="M" name="size" id="M" class="checkbox">
                <label for="M">M</label>
                <input type="checkbox" value="L" name="size" id="L" class="checkbox">
                <label for="L">L</label>
                <input type="checkbox" value="XL" name="size" id="XL" class="checkbox">
                <label for="XL">XL</label>

            </div>

        </div>
        <div class="side-item">
            <b onclick="openMe(this.parentElement)"> צבעים</b>
            <div class="sub-content">
                <input type="checkbox" value="red" name="color" id="red" class="checkbox">
                <label for="red"></label>
                <input type="checkbox" value="blue" name="color" id="blue" class="checkbox">
                <label for="blue"></label>
                <input type="checkbox" value="green" name="color" id="green" class="checkbox">
                <label for="green"></label>
                <input type="checkbox" value="purple" name="color" id="purple" class="checkbox">
                <label for="purple"></label>
                <input type="checkbox" value="yellow" name="color" id="yellow" class="checkbox">
                <label for="yellow"></label>

            </div>

        </div>
        <div class="side-item">
            <b onclick="openMe(this.parentElement)"> מעצבים</b>
            <div class="sub-content">
                <input type="checkbox" value="בא מאהבה" name="supplier" id="בא מאהבה" class="checkbox">
                <label for="בא מאהבה">בא מאהבה</label>
                <input type="checkbox" value="עמוס" name="supplier" id="עמוס" class="checkbox">
                <label for="עמוס">עמוס</label>
                <input type="checkbox" value="יעקב" name="supplier" id="יעקב" class="checkbox">
                <label for="יעקב">יעקב</label>
                <input type="checkbox" value="לוק" name="supplier" id="לוק" class="checkbox">
                <label for="לוק">לוק</label>
                <input type="checkbox" value="אחרים" name="supplier" id="אחרים" class="checkbox">
                <label for="אחרים">אחרים</label>

            </div>

        </div>
        <input type="submit" value="סנן">
    </form>
</aside>
<section class="products">
    <div class="single-product">

        <a href="product.html" class="product-anchor"><img src="img/nm1.jpg" class="product-img"  alt="תמונת מוצר" title="product name"/>

            <span class="description">תיאור המוצר בכמה מילים</span>
            <br>
            <span class="price">49.90₪</span>
        </a>


    </div>



    <div class="single-product">

        <a href="product.html" class="product-anchor"><img src="img/nm2.jpg" class="product-img" alt="תמונת מוצר" title="product name"/>

            <span class="description">תיאור המוצר בכמה מילים</span>
            <br>
            <span class="price">49.90₪</span>
        </a>


    </div>

    <div class="single-product">

        <a href="product.html" class="product-anchor"><img src="img/nm3.jpg" class="product-img" alt="תמונת מוצר" title="product name"/>

            <span class="description">תיאור המוצר בכמה מילים</span>
            <br>
            <span class="price">49.90₪</span>
        </a>


    </div>

    <div class="single-product">

        <a href="product.html" class="product-anchor"><img src="img/nm4.jpg" class="product-img" alt="תמונת מוצר" title="product name"/>

            <span class="description">תיאור המוצר בכמה מילים</span>
            <br>
            <span class="price">49.90₪</span>
        </a>


    </div>

</section>
<footer class="page-numbers">
    <a href="#" class="page-links">הקודם</a>
    <b class="this-page page-links">1</b>
    <a class="plus-one page-links" href="#">2</a>
    <a class="plus-two page-links" href="#">3</a>
    <a class="next page-links" href="#">הבא</a>
</footer>
<script src="script/main.js"></script>
</body>
</html>