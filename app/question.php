<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
use App\answer;
use App\survey;

class question extends Model
{
    protected $fillable = [
        'user_id',	
        'title',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function survey(){
        return $this->belongsToMany(survey::class,
            'question_survey', 'question_id', 'survey_id')->withTimestamps();
    }

    public function answers() {
        return $this->hasMany(answer::class);
    }

}
