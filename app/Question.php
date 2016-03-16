<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

      protected $fillable =  [
        'theme',
        'question'
          ];

      public function options(){
          return  $this->hasMany('App\QuestionOption', 'question_id', 'id');
      }
}
