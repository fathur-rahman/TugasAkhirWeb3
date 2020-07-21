<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //  
    protected $table = 'categories';
    protected $fillable = ['id','nama_kategori'];

    public function posting()
    {
        return $this->hasMany('App\Posting');
    }
}
