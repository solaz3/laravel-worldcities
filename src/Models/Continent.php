<?php

namespace Coldcoder\WorldCity\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Coldcoder\WorldCity\Traits\WorldModelTrait;

class Continent extends Model
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

        $this->setTable(config('worldcities.table.continent'));
    }

    /**
     * return Countries
     *
     * @return mixed
     */
    public function countries()
    {
        return $this->hasMany(Country::class, 'continent_id');
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->translatable) && !is_array($value)) {
            return $this->setTranslation($key, app()->getLocale(), $value);
        }

        return parent::setAttribute($key, $value);
    }
}
