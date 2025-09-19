<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyRoomImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'sort_order',
        'is_active'
    ];  

    protected $casts = [
        'is_active' => 'boolean'
    ];
}