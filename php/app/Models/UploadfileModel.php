<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadfileModel extends Model
{
    use HasFactory;

    protected $table = 'uploadfile';

    // Custom primary key, if different from 'id'
    public $timestamps = true;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'orderid', 
        'thesis_main', 
        'thesis_hard_cover',
        'thesis_soft_cover',
        'synopsis_main',
        'synopsis_cover'
    ];
}
