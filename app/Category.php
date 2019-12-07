<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $primaryKey = "id_category";
    protected $fillable= ['name_category','created_at','updated_at',];

    public $timestamps = true;
}
