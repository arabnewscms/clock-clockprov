# Tested Packge With Phpanony - Clock
This is Test Package To get Date And clock

#installation 

Run This Command On Your Composer 
` composer require clock/clockprov:dev-master `


after completed to download package 
open your app.php file from this path `config/app.php`

put this to  provider array  line

```php
Clock\ClockProv\ClockProvider::class,

```

and this aliases array from package 

```php 
'Clock'     => Clock\ClockProv\ClockFacdecs::class,

```

now please run this command on your composer ` php artisan vendor:publish ` 

##usage 

to use this package clock 
```php 
 Clock::clock();
 
```

or if You want use Map 

```php 
Clock::map();
```
