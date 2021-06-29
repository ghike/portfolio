<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicativo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alt_name',
        'short_text',
        'text',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
    ];
}
