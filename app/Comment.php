<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    protected $fillable = ['id','body','user_id','post_id'];
    
    public function posting()
    {
        return $this->belongsTo('App\Posting','post_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    
}
