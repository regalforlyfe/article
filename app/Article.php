<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    protected $primaryKey = "id_article";
    protected $fillable= ['name_article','id_category','konten'];

    public $timestamps = true;
}
