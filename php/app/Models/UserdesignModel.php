<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserdesignModel extends Model
{
    use HasFactory;

    protected $table = 'userwisedesigns';

    // Custom primary key, if different from 'id'
    public $timestamps = true;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'orderid', 
        'url', 
        'status',
        'reason'
    ];
}
