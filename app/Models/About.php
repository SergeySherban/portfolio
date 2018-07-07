<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    public $timestamps = false;
    
    protected $guarded = [''];
	protected $fillabel = ['title', 'description'];
}