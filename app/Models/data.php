<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;
    protected $table ='data';
    protected $primaryKey = 'Uuid';
    protected $fillable=[
        'First_name',
        'last_name',
        'Email',
    ];
}
