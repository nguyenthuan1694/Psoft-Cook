<?php

namespace App\Models;

use App\Models\Traits\Relationship\TagRelationship;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use TagRelationship;

    protected $guarded = ['id'];
}
