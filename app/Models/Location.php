<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $table = "location";

    public $fillable = ['id',
        'name',
        'created_at', 'updated_at'];

    public $dates = ['created_at', 'updated_at'];
    public $primaryKey = 'id';

}
