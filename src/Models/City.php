<?php

namespace Coldcoder\WorldCity\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Coldcoder\WorldCity\Traits\WorldModelTrait;

class City extends Model
{
    use
        HasTranslations,
        WorldModelTrait;

    public $translatable = ['name', 'alias', 'abbr', 'full_name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'country_id',
        'state_id',
        'alias',
        'abbr',
        'full_name',
        'code',
    ];

    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('worldcities.table.city'));
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

    /**
     * belongs to state
     *
     * @return State
     */
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->translatable) && !is_array($value)) {
            return $this->setTranslation($key, app()->getLocale(), $value);
        }

        return parent::setAttribute($key, $value);
    }
}
