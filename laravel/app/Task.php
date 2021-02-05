<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = [

    'title',
    'description',
    'priority',

  ];

  public function employee(){

    return $this -> belongsTO(Employee::class);

  }
}
