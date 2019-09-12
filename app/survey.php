<?php

namespace App;
use App\user;
use App\question;
use App\answer;

use Illuminate\Database\Eloquent\Model;

class survey extends Model
{
    

    protected $fillable = ['title', 'description', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function question(){
        return $this->belongsToMany(question::class);
    }

    public function answers() {
        return $this->hasMany(answer::class);
    }

}
