<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ["title", "author", "excerpt", "body"]; // ini artinya field ini boleh diisi
    protected $guarded = ["id"]; // ini artinya field ini gaboleh diisi


    // Membuat relasional model antara post dan categori. jadi disini setiap post memiliki 1 kategori dan sebaliknya.
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
