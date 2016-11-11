<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

 //Indica al orm con que campos hacer el match al recuperar los datos del $request 
protected $fillable = ['name','color','priority'];
}
