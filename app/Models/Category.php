<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $fillable = ['image','title','content'];

    public $translatable = ['title','content'];
}
