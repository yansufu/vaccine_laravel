<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizations extends Model
{
    use HasFactory;

    protected $table = 'organization';

    public $timestamps = false;

    protected $fillable = [
        'org_name',
    ];
}
