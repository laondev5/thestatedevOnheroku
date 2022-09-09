<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'p_number', 'title', 'image', 'description'
    ];
}
