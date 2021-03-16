<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public $table = "dog";

    public $fillable = ['id',
        'name',
        'created_at', 'updated_at'];

    public $dates = ['created_at', 'updated_at'];
    public $primaryKey = 'id';

}
