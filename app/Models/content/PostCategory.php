<?php

namespace App\Models\content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = ['name' , 'description' , 'slug' , 'image' , 'status' , 'tags'];
}
