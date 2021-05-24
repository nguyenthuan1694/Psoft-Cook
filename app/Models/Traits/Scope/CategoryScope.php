<?php

namespace App\Models\Traits\Scope;

trait CategoryScope
{
    public function scopeRoot($query)
    {
        return $query->where('parent_id', '=', NULL);
    }
}
