# 
Returns a number in full

## 
Installation / Configuration

Include ServiceProvider in the config \ app.php file

```php
'providers' => [
    rcngo\PtBrNumberInFull\Provider\PtBrNumberInFullServiceProvider::class,
];
```

Also in this file, register the facade in the 'aliases' array

```php
'aliases' => [
    'NumberInFull' => rcngo\PtBrNumberInFull\Facade\PtBrNumberInFull::class,
];
```

## Use


```php

NumberInFull::getFull(1);
//Return um real

NumberInFull::getFull(1, false);
//Return um

NumberInFull::getFull(1, false, true);
//Return uma

```

