<?php

namespace App\Models;

/*use Illuminate\Database\Eloquent\Factories\HasFactory;*/
use Illuminate\Database\Eloquent\Model;

class Vakancy extends Model
{
   protected $fillable =
       [
           'title',
           'desk',
           'content',
           'is_published',
       ];
}
