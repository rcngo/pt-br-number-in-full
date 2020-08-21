# Convert number in words

## Installation / Configuration

Navigate to your project folder, for example:

```
cd /etc/www/projeto
```

And then run:

```
composer require rcngo/pt-br-number-in-words:1.2.* --no-scripts
```

Or add it to the composer.json file, add it to your "require" :, example:

```php
{
    "require": {
        "rcngo/pt-br-number-in-words": "1.2.*"
    }
}
```


Run the composer update --no-scripts command.

## Use


```php

NumberInWords::convertToWords(1);
//Return um real

NumberInWords::convertToWords(1, false);
//Return um

NumberInWords::convertToWords(1, false, true);
//Return uma

```

