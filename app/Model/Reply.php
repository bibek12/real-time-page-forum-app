<?php

namespace App\Model;

use App\User;
use App\Model\Like;
use App\Model\Question;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //

    public function user(){
        $this->belongsTo(User::class);
    }

    public function like(){
        $this->hasMany(Like::class);
    }

    public function question(){
        $this->belongsTo(Question::class);
    }
}
