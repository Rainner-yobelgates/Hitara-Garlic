<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutHitara extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'title', 'description'];
}
