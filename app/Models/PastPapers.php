<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PastPapers extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'year',
        'file',
    ];
}
