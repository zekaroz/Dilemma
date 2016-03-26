<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

      protected $fillable =  [
        'theme',
        'question',
        'release_date',
        'is_open'
          ];

      public function options(){
          return  $this->hasMany('App\QuestionOption', 'question_id', 'id');
      }
}
