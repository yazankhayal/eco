<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $table = "user";

    public $fillable = ['id',
        'dog_id',
        'name',
        'location_id',
        'created_at', 'updated_at'];

    public $dates = ['created_at', 'updated_at'];
    public $primaryKey = 'id';

    public function Location(){
        return $this->belongsTo(Location::class,"location_id","id");
    }

    public function Dog(){
        return $this->belongsTo(Dog::class,"dog_id","id");
    }

}
