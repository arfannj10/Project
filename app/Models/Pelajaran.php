<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;

    protected $table = 'pelajarans';

    protected $fillable = ['kd_mp', 'matapelajaran'];

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }
    
    public function student()
    {
        return $this->belongsToMany(Student::class);
    }
}
