<?php

namespace App\Models\Traits\Attribute;

/**
 * Trait CategoryAttribue
 * @package App\Models\Traits\Attribute
 */
trait CategoryAttribue
{
    public function getParentNameAttribute()
    {
        return isset($this->parent) ? $this->parent->name : '';
    }
}
