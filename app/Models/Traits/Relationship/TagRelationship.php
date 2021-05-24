<?php

namespace App\Models\Traits\Relationship;

trait TagRelationship
{
    public function product()
    {
        return $this->morphedByMany('App\Models\Product', 'taggable');
    }
}
