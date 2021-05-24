<?php

namespace App\Models\Traits\Relationship;

trait OrderDetailRelationship
{
    public function order()
    {
        $this->belongsTo('App\Models\Order');
    }
}
