<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = ['title','content','phone','email','address','logo','favicon','facebook','instagram'];

    public $translatable = ['title','content','address'];
}
