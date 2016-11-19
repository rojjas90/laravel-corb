<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

 //Indica al orm con que campos hacer el match al recuperar los datos del $request
protected $fillable = ['description','name','color','priority','user_id','project_id'];

public function user()
// public function creator()
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

public function scopePriority($query, $args)
{
  return $query->orderBy('priority',$args);
}

public function scopeSinceDays($query, $days)
{
  $dt = new Carbon();
  $date = $dt->subDays($days);
  return $query->where('created_at','>=',$date);
}

}
