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
        'tmain_stat',
        'thesis_hard_cover',
        'thard_stat',
        'thesis_soft_cover',
        'tsoft_stat',
        'synopsis_main',
        'smain_stat',
        'synopsis_cover',
        'scover_stat'
    ];
}
