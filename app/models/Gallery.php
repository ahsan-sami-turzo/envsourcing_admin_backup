<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table ='gallery';
	protected $fillable = [
        'image',
        'status',
        'created_at',
        'updated_at',
	];
}
