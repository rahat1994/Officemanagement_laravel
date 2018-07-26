<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{

	 protected $fillable = ['project_title', 'project_category', 'project_priority', 'project_manager', 'project_description'];
	 
}
