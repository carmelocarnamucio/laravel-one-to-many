<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
  protected $fillable = [

    'title',
    'description',

  ];

  public function tasks() {

    return $this -> belongsToMany(Task::class);

  }
}
