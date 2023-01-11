<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourdoctor extends Model
{
    protected $fillable =
        [
            'title',
            'desk',
            'content',
            'document',
            'image',
            'is_published',
        ];
}
