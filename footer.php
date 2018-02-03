<div class="footer">

    <div class="outer">
        <div class="inner">
            <h4>Information</h4>
            <a>About</a>
            <a>Delivery Information</a>
            <a>Privacy Policy</a>
            <a>Tearm & Condition</a>
        </div>
        <div class="inner2">
            <h4>Costomer Information</h4>
            <a>Contact Us</a>
            <a>Return</a>
            <a>Site Map</a>
        </div>
        <div class="inner">
            <h4>My Account</h4>
            <a>Order History</a>
            <a>Wish list</a>
            <a>News Latter</a>
        </div>
        <div class="inner2">
            <h4>Follow Us</h4>
            <a>Facebook</a>
            <a>Twitter</a>
            <a>Google +</a>
            <a>Youtube</a>
        </div>
    </div>

    <hr/>
    <div class="copyright">
        <span>Powered by Nazmus Sakib © 2017</span>
    </div>

</div>

<script>

    var $slides = $('.slides');
    var $slide = $('.slide1');
    var count = 1;

    $(document).ready(function () {

        setInterval(function () {

            $slides.animate({'margin-left': '-=68vw'}, 1200, function () {

                count++;
                if (count === 4) {
                    $slides.css("margin-left", 0);
                    count = 1;
                }

            });
        }, 4000);
    });

</script>

<script src="js/main.js"></script>

</body>
</html>