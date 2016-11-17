<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

 //Indica al orm con que campos hacer el match al recuperar los datos del $request
protected $fillable = ['description','name','color','priority','user_id','project_id'];

public function user()
{
  return $this->belongsTo('App\Models\User');
}

public function project()
{
  return $this->belongsTo('App\Models\Project');
}

public function collaborators()
{
  return $this->belongsToMany('App\Models\User')->withPivot('assigned_at','allow');
}
}
