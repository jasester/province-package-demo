<?php

namespace Hnndy\Province\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'name', 'level', 'parent_id'
    ];
}
