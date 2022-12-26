<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Norm extends Model
{
    protected $fillable =
        [
            'title',
            'description',
            'content',
            'is_published',
        ];
}
