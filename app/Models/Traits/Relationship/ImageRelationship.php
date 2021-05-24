<?php


namespace App\Models\Traits\Relationship;


trait ImageRelationship
{
    public function imageable()
    {
        return $this->morphTo();
    }
}
