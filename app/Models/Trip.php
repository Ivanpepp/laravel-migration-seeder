<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    protected $fillable = ['title', 'location', 'description','url', 'title_review','review','date_review'];
}
