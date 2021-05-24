<?php

namespace App\Models;

use App\Models\Traits\Attribute\CategoryAttribue;
use App\Models\Traits\Relationship\CategoryRelationship;
use App\Models\Traits\Scope\CategoryScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use CategoryAttribue,
        CategoryScope,
        CategoryRelationship;

    protected $guarded = ['id'];

    protected $table = 'categories';

    protected $with = ['children'];

    protected $dates = ['created_at', 'updated_at'];
}
