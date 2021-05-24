<?php

namespace App\Models\Traits\Relationship;

trait OrderRelationship
{
    public function order_details()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
}
