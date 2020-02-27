# Superlight  DataCollection package for Laravel
This package ensures that, for example, static data such as a country list are available everywhere in your laravel application with useful functions, see it as an static data resource **without** using any DB.

## Install
```
composer require stijlgenoten/data-collection
```


## Use
Run this command to make a data collection
```
 php artisan make:datacollection {Name}
 ```

The package will automatically generate a file ( in  folder  `App\DataCollections`  ) looking like this:



```php
<?php

namespace App\DataCollections;

use Stijlgenoten\DataCollection\DataCollection;

class DummyCollection extends DataCollection
{
	public static function RegisterData()
	{
		return [];
	}
}

```


Within  the `RegisterData()` function you can for  store an array, some examples:

```php
return  ['red','white','blue'];
```


```php
return  [
	'NL' => 'Nederland',
	'XX' => 'Xxxxxx',
];
```

## Now the magic happen!
