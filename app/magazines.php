<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class magazines extends Model
{
    protected $fillable = [
        'id', 'title', 'id_publisher',
    ];
}
