<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarMark extends Model
{
    use HasFactory;

    public $fillable = [
        'mark_id',
        'mark_name',
        'mark_cyrillic_name',
        'mark_popular',
        'mark_country'
    ];
}
