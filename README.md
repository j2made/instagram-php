# instagram-php
WordPress function to integrate an Instagram feed via PHP and JSON.

## Installation
1. Place script from instagram.php in WordPress `functions.php`.
2. Begin using function tag in your theme files.

## Usage
#### Basic Usage
```php
<?php echo instagram(); ?>
```

#### Advanced Usage
```php
<?php echo instagram($count = 1, $width = 100, $height = 100); ?>
```

## Requirements
1. User ID
2. Access Token

These can be found by registering here: http://instagram.com/developer/
