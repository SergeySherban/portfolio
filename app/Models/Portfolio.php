<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [''];
	protected $fillabel = ['title', 'url', 'preview', 'description', 'category'];
}
