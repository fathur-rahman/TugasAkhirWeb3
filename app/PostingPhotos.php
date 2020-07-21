<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostingPhotos extends Model
{
    //
    protected $table = 'posting_photos';
    protected $fillable = ['id','photo','posting_id'];

    public function category()
    {
        return $this->belongsTo('App\Posting','posting_id');
    }
}
