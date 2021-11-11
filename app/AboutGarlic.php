<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutGarlic extends Model
{
    use HasFactory;
    protected $fillable = ['title1', 'title2', 'description1', 'description2'];
}
