<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //Error : Add [_token] to fillable property to allow mass assignment on [App\Models\Product].
    //Kena masukkan protected $guarded atau  protected $fillable

    //option 1
    //protected $guarded = ['id'];     //data x boleh masuk utk id, selain id, data boleh masuk
    
    //option 2
    protected $fillable = [
        'name',
        'description',
        'price',
        'image_url',
    ];

}
