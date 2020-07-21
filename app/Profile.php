<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = "profiles";
    protected $fillable = ['id','avatar','backdrop','display_name','alamat','bio','user_id'];
    
    public function user()
    {
        return $this->belongsTo('App\User','id');
    }
}
