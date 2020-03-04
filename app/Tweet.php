<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    //
    protected $fillable = array(  
        'message',
        'author',
    );

    public function user()
    {
        return $this->belongsTo( 'App\User' );
    }

}
