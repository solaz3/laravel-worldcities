<?php

namespace Coldcoder\WorldCity\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Coldcoder\WorldCity\Traits\WorldModelTrait;

class Country extends Model
{
    use
        HasTranslations,
        WorldModelTrait;

    /**
     * columns that translateable
     *
     * @var array
     */
    public $translatable = ['name', 'alias', 'abbr', 'full_name', 'capital', 'currency_name'];

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('worldcities.table.country'));
    }

    /**
     * return States
     *
     * @return mixed
     */
    public function states()
    {
        return $this->hasMany(State::class, 'country_id');
    }

    /**
     * return cities
     * we can not use hasManyThrough here cuz some of countries do not have states.
     *
     * @return void
     */
    public function cities()
    {
        return $this->hasMany(City::class, 'country_id');
    }

    /**
     * Continent of country
     *
     * @return Continent
     */
    public function continent()
    {
        return $this->belongsTo(Continent::class, 'continent_id');
    }
}
