<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memes extends Model
{
  protected $fillable = [
    'userId',
    'memePath'
  ];
}
