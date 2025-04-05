<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tbl_task'; 
    protected $fillable = ['task', 'description', 'date','time' , 'person_id'];
}
