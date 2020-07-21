<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    //
    protected $table = 'postings';
    protected $fillable = ['id','user_id','category_id','judul','keterangan_khusus','harga','deskripsi'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function postingPhotos()
    {
        return $this->hasMany('App\PostingPhotos');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

}
