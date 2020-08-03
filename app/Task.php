<?php

namespace App;

use IlluminateDatabaseEloquentModel;

class Task extends Model
{
    protected $fillable = [
        'name', 'detail'
    ];
}
