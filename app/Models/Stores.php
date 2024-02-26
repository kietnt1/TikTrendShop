<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'slug', 'id_user', 'phone', 'name', 'address', 'status', 'follows', 'description', 'image_arr', 'created_at', 'updated_at'
    ];
    use HasFactory;
}
