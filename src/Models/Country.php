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
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;

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

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->translatable) && !is_array($value)) {
            return $this->setTranslation($key, app()->getLocale(), $value);
        }

        return parent::setAttribute($key, $value);
    }
}
