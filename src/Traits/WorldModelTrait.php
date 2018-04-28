<?php

namespace Coldcoder\WorldCity\Traits;

trait WorldModelTrait
{
    public static function findFromString(string $key, string $value, string $locale = null)
    {
        $locale = $locale ?? app()->getLocale();

        if (in_array($key, $this->translatable) && !is_array($value)) {
            return static::query()
                ->where("{$key}->{$locale}", $value)
                ->first();
        }

        return static::query()->where($key, $value)->first();
    }

    public static function findFromCode(string $code)
    {
        return static::findFromString('code', $code);
    }

    public function setAttribute($key, $value)
    {
        if (in_array($key, $this->translatable) && !is_array($value)) {
            return $this->setTranslation($key, app()->getLocale(), $value);
        }

        return parent::setAttribute($key, $value);
    }
}
