<html>
    <head>
        <title>Authorize.net tutorial by AlphansoTech.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link href='../css/main.css' rel='stylesheet' type='text/css'> -->
        <link href='../css/custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
            <div class="">
                <h2>Authorize.net Payment Gateway</h2>
            </div>
                <form id="contact-form" method="post" action="pay.php" role="form">
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="form_firstname">Firstname</label>
                                        <input id="form_firstname" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname</label>
                                        <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_country">Country</label>
                                        <input id="form_country" type="text" name="country" class="form-control" placeholder="Please enter your country *" required="required" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_state">State</label>
                                        <input id="form_state" type="text" name="state" class="form-control" placeholder="Please enter your state *">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_city">City</label>
                                        <input id="form_city" type="text" name="city" class="form-control" placeholder="Please enter your city *" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_zip">Zip</label>
                                        <input id="form_zip" type="text" name="zip" class="form-control" placeholder="Please enter your zip *">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone *" required="required" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_address">Address</label>
                                        <input id="form_address" type="text" name="address" class="form-control" placeholder="Please enter your address *">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_card">Card Number</label>
                                        <input id="form_card" type="text" name="cardNumber" class="form-control" placeholder="Please enter your Card Number *">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Submit" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Hope you kept the order total somewhere in your database and/or in session to validate amount while final checkout.-->
                        <input type="hidden" name="amount" value="20" />
                    </form>
        </div>
    </body>
</html>