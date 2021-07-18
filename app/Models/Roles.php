<?php

namespace App\Models;
use App\Usuarios;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this->hasMany(Users::class);
    }
}
