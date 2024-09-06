<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ["title", "author", "excerpt", "body"]; // ini artinya field ini boleh diisi
    protected $guarded = ["id"]; // ini artinya field ini gaboleh diisi
}
