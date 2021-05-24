<?php


namespace App\Models\Traits\Relationship;


trait CategoryRelationship
{
    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_category')->orderBy('created_at','DESC');
    }
}
