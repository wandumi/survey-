<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\question;
use App\survey;

class answer extends Model
{
    protected $fillable = ['user_id','survey_id','question_id','answer'];
    
    public function survey() {
        return $this->belongsTo(survey::class, 'survey_id');
    }
  
    public function question() {
        return $this->belongsTo(question::class, 'question_id');
    }

    
}
