<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\Todo;

class Project extends Model
{

protected $fillable = ['name'];

    public function todos()
    {
      return $this->hasMany('App\Models\Todo');
    }
}
