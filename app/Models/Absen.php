<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    protected $table='absens';

    protected $fillable = ['kelas_id','student_id','status','keterangan'];

    public function student()
    {    
        return $this->belongsToMany(Student::class);
    }

    // public function kelas()
    // {
    //     return $this->belongsToMany('App\Models\Kelas');
    // }
}
