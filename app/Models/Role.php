<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // const SUPERADMIN = 11;
    // const ADMIN = 22;

    
    protected $fillable = [
        'role'
    ];
}
