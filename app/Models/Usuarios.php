<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    public function roles($value = ''){
        $this->belongsTo(Roles::class);
    }
    public function hasRoles($value=''){
        $this->role===$role
    }

}
