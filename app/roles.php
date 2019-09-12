<?php

namespace App;

use App\user;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
   protected $fillable = [
       'name',
   ];

   public function users(){
       return $this->hasMany(user::class);
   }
}
