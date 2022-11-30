<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;
    protected $fillable = ['idHall', 'seanceDate', 'idMovie'];
    public function Movies() {
        return $this->hasMany(Movie::class, 'id', 'idMovie');
    }
    public function Halls() {
        return $this->hasMany(Halls::class, 'id', 'idHall');
    }
}
