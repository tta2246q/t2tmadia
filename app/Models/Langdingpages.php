<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langdingpages extends Model
{
    use HasFactory;
    protected $table = 'landingpages';
    protected $fillable = [
        'title',
        'images',
        'order',
        'status',
    ];

}
