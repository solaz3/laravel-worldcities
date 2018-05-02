# Add models for retrieving world countries, states and cities in Laravel app

Brand new world country/state/city database according to your locale settings.

As I was developing a cascaded dropdown of countries, state and cities selection, I found a package named [khsing/laravel-world](https://github.com/khsing/laravel-world), but this package seems not maintain for a long time, so I've forked it and changed a little to fix some issues. Because of its data structure, it is a little diffcult to retrieve locale data with eagerly loading. So I develop this package which implemented [spatie/laravel-translatable](https://github.com/spatie/laravel-translatable) so it can get data by your locale with no pain.

## Requirements

This package requires Laravel 5.5 or higher, PHP 7.0 or higher and a database that supports `json` fields such as MySQL 5.7 or higher.

if you are using Mariadb, pls make sure the version > 10.2.8 which supports json field, and use [ybr-nx/laravel-mariadb](https://github.com/ybr-nx/laravel-mariadb) as your database driver

## Installation

You can install the package via composer:

``` bash
composer require coldcoder/laravel-worldcities
```

The package will automatically register itself for laravel >= 5.5.

You can register the service provider in config/app.php manually if using laravel < 5.5

You can publish the migration with:
```bash
php artisan vendor:publish --provider="Coldcoder\WorldCity\WorldCityServiceProvider"
```

After that the migration and seeds will be published for you, you can then create the tables of `world` structures and seeds by running the migration and seeds:

```bash
php artisan migrate
```

```bash
composer dump-autoload
php artisan db:seed --class=WorldsTablesSeeder
```

You can optionally publish the config file with:
```bash
php artisan vendor:publish --provider="Coldcoder\WorldCity\WorldCityServiceProvider" --tag="config"
```

You can config the table name in the published config file:

```php
return [

    /*
     * define the table names for continent, country, state and city
     */
    'table' => [
        'continent' => 'worlds_continents',

        'country' => 'worlds_countries',

        'state' => 'worlds_states',

        'city' => 'worlds_cities',
    ],
];
```

Here are some code examples:

```php
use Coldcoder\WorldCity\Models\Country;

// get a country by code
$usa = Country::findFromCode('us');
$usa->states;  // return states
$usa->cities;  // return cities
$usa->has_state; // return true;

// as it just implements locales of en and zh, you can translate other locales by yourself
// or request a PR
// translating a continent/country/state/city
$usa->setTranslation('name', 'fr', 'country name in French');
$usa->save();

// you can use HasCity trait within your own model to setup relationship
use Coldcoder\WorldCity\Traits\HasCity;

class YourModel extends Model
{
    use HasCity;
}

// after that you can get your model's related city
$model->city;
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
