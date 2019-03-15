<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'description', 'image', 'status'];
}
