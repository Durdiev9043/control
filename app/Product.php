<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['domen_name','from_domen','to_domen','phone','organization','annotation'];
}
