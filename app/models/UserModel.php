<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $timestamps = false;
    protected $table ='users';
    protected $fillable = [
    ];
}

?>
