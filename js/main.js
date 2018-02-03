$(document).ready(function () {

    cat();
    brand();
    product();

    //cat() is a funtion fetching category record from database whenever page is load
    function cat() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {category: 1},
            success: function (data) {
                $("#get_category").html(data);

            }
        })
    }

    //brand() is a funtion fetching brand record from database whenever page is load
    function brand() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {brand: 1},
            success: function (data) {
                $("#get_brand").html(data);
            }
        })
    }

    //product() is a funtion fetching product record from database whenever page is load
    function product() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {getProduct: 1},
            success: function (data) {
                $("#get_product").html(data);
            }
        })
    }

    /*	when page is load successfully then there is a list of categories when user click on category we will get category id and
        according to id we will show products
    */

    $("body").delegate(".category", "click", function (event) {
        $("#get_product").html("<h3>Loading...</h3>");
        event.preventDefault();
        var cid = $(this).attr('cid');

        $.ajax({
            url: "action.php",
            method: "POST",
            data: {get_seleted_Category: 1, cat_id: cid},
            success: function (data) {
                $("#get_product").html(data);
                if ($("body").width() < 480) {
                    $("body").scrollTop(683);
                }
            }
        })

    })

    /*	when page is load successfully then there is a list of brands when user click on brand we will get brand id and
        according to brand id we will show products
    */
    $("body").delegate(".selectBrand", "click", function (event) {
        event.preventDefault();
        $("#get_product").html("<h3>Loading...</h3>");
        var bid = $(this).attr('bid');

        $.ajax({
            url: "action.php",
            method: "POST",
            data: {selectBrand: 1, brand_id: bid},
            success: function (data) {
                $("#get_product").html(data);
                if ($("body").width() < 480) {
                    $("body").scrollTop(683);
                }
            }
        })

    })

    //Add Product into Cart
    $("body").delegate("#product", "click", function (event) {
        var pid = $(this).attr("pid");
        event.preventDefault();
        $(".overlay").html("<h3>Loading...</h3>");
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {addToCart: 1, proId: pid},
            success: function (data) {

                $('#product_msg').html(data);
                $('.overlay').hide();
            }
        })
    })


})