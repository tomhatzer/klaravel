<?php

namespace Ksoft\Klaravel\Traits;

/**
* Trait ActiveScope.
*/
trait ActiveScope
{
    /**
     * Scope a query to only include boolean of a given type.
     * defaults to 'active' attr name.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string | array $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query, $type = 'active')
    {
        if (is_array($type)) {
            foreach ($type as $key) {
                $query->where($key, 1);
            }
        }
        return $query;
    }
}
