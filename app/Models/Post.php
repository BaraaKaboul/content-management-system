<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $fillable = ['title','content','smallDesc','tags','image','user_id','category_id'];

    public $translatable = ['title','content','smallDesc'];
}
