# Convert number in words

## Installation / Configuration

Include ServiceProvider in the config \ app.php file

```php
'providers' => [
    rcngo\PtBrNumberInWords\Provider\PtBrNumberInWordsServiceProvider::class,
];
```

Also in this file, register the facade in the 'aliases' array

```php
'aliases' => [
    'NumberInWords' => rcngo\PtBrNumberInWords\Facade\PtBrNumberInWords::class,
];
```

## Use


```php

NumberInWords::convertToWords(1);
//Return um real

NumberInWords::convertToWords(1, false);
//Return um

NumberInWords::convertToWords(1, false, true);
//Return uma

```

