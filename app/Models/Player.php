<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use SoftDeletes;
     protected $table = 'player';
     protected $primaryKey = 'id';
    protected $fillable = ['name', 'age', 'position'];
}
