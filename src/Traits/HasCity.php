<?php

namespace Coldcoder\WorldCity\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Coldcoder\WorldCity\Models\City;

trait HasCity
{
    public static function getCityClassName() : string
    {
        return City::class;
    }

    public static function bootHasCity()
    {
        static::saving(function (Model $model) {

        });
    }

    public function city() : BelongsTo
    {
        return $this->belongsTo(self::getCityClassName(), 'city_id');
    }
}
