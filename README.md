# instagram-php
Simple WordPress function to integrate an Instagram feed via PHP and JSON.

## Installation
Wordpress:
1. Place script from instagram.php in WordPress `functions.php`.
2. Begin using function tag in your theme files.

## Requirements
1. Instagram Access Token
2. Instagram User ID

**To get a token:**
Register a new client by visiting http://instagram.com/developer/. Make sure you are logged in as the target account.

Once the client is created, change the following url to match the parameters of the client:
https://api.instagram.com/oauth/authorize/?client_id=CLIENT-ID&redirect_uri=REDIRECT-URI&response_type=token

This will respond in a redirect with the access token in the url.

**To find the user id:**
Enter the following into your broswer url, changing the values to match the parameters of the user:
https://api.instagram.com/v1/users/search?q=USERNAME&access_token=ACCESS TOKEN

This will return some json data, including your user ID


## Usage
### Changes to file
To use, either update the default values of `$user_id` and `$access_token` in the `get_the_gram()` function, or pass these arguments in the function itself.

#### Basic Usage
```php
<?php 
    $data = get_the_gram();
    print_r($data);
?>
```

#### Advanced Usage
```php
<?php 
    $user_id   = 123456;
    $access_id = 123456.12345.12345678;
    $data = get_the_gram( 5, '-2 hours', $user_id, $access_token); 

    print_r($data);
?>
```