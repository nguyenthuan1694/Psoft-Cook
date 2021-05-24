<?php

namespace App\Models;

use App\Models\Traits\Relationship\ImageRelationship;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use ImageRelationship;

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    protected $table = 'images';
}
