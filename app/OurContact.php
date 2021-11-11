<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'whatsapp',
        'instagram',
        'email',
        'twitter',
        'facebook'
    ];

}
