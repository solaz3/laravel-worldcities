<?php

namespace Coldcoder\WorldCity\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Coldcoder\WorldCity\Traits\WorldModelTrait;

class State extends Model
{
    use
        HasTranslations,
        WorldModelTrait;

    /**
     * columns that translateable
     *
     * @var array
     */
    public $translatable = ['name', 'alias', 'abbr', 'full_name'];

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('worldcities.table.state'));
    }

    /**
     * return cities
     *
     * @return void
     */
    public function cities()
    {
        return $this->hasMany(City::class, 'state_id');
    }

    /**
     * Continent of country
     *
     * @return Country
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
