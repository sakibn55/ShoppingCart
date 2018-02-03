<?php
require('conn.php');
include('header.php');

if (isset($_SESSION["uid"])) {
    header("location:profile.php");
}
?>

    <div class="slider">
        <div class="slides">
            <div class="slide1">
                <img src="Images/4-2-iphone-png-picture-png-image.png" class="img1"/>
            </div>
            <div class="slide1">
                <img src="Images/2-2-iphone-png-picture.png" class="img2"/>
            </div>
            <div class="slide1">
                <img src="Images/1-2-iphone-png-picture-png-clipart.png" class="img3"/>
            </div>

        </div>
        <div class="constant">
            <h1>iPhone 7</h1>
            <p>Comfort is a very important things nowadays because it is a condition of satifaction.</p>

            <a href="items.php" class="btnshopnow">Shop Now!</a>
        </div>
    </div>


    <div class="content1">
        <div class="innertitle1">
            <h3>Home Theater & TV</h3>
            <p class="para1">Comfort is a very important things nowadays because it is a condition of satifaction.</p>
            <br/>
            <p class="para1">Shop Now!</p>
        </div>

        <div class="innertitle2">
            <h3>Home Appliances</h3>
            <p class="para1">Comfort is a very important things nowadays because it is a condition of satifaction.</p>
            <br/>
            <p class="para1">Shop Now!</p>
        </div>

        <div class="inner1">
            <img src="Images/Home_Theaters.png" class="img1"/>
        </div>
        <div class="inner2">
            <img src="Images/Black_Vacuum_Cleaner_PNG_Clipart-629.png" class="img2"/>
        </div>
    </div>

    <p class="featuredpara">All items</p><br>

    <div class="products">
        <div class="wait overlay">
            <!-- Ajaxfying loading msg  -->
        </div>

        <div id="product_msg">
            <!-- Ajaxfying success msg  -->
        </div>

        <div class='products' id='get_product'>

            <!-- Getting products via Ajax  -->

        </div>

        <div class="products" id="get_brand">

            <!-- Getting products via Ajax  -->

        </div>


    </div>


    </div>
    </section>


<?php
include 'footer.php';
?>