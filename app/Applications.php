<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Applications;

class Applications extends Model
{
    protected $fillable = [
        'application_name',
        'description',
        'icon',
        'demo_file',
    ];
}
