# Sample PHP Code for Authorize.Net AIM
You need to run the composer(composer.json included) to add the dependency code. 
This is an example how you can utilize the Authorize.net AIM integration method.
Additionally, included the constants directory and file, which you might not get with composer setup.
You need to change the MERCHANT_LOGIN_ID and MERCHANT_TRANSACTION_KEY constants in constants/Constants.php file.

After adding the dependency, run the index.php file. Provide the information asked in the form.
Hitting the Submit button will make the mock transaction and you should receive Transaction Response code : 1 in the response.
And you should receive a test merchant email receipt on your registered email address.
