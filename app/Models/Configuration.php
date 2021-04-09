<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    public $fillable = [
        'visitors',
        'total_inspection',
        'increment_by',
        'updated_date',
        'updated_at',
    ];
    
    public $date = [
        'updated_date',
    ];
}
