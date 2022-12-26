<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBoln extends Model
{
    use HasFactory;

    protected $table = 'admin_boln';
    protected $fillable =
        [
            'title',
            'content',
            'is_published',
        ];
}
