<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GallaryImageType extends Model
{
    protected $table ='gallery_img_type';
	protected $fillable = [
        'name',
        'status',
        'created_at',
        'updated_at',
	];
}
