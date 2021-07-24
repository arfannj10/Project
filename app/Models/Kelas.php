<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = ['tingkat_id','nama_kelas'];

    public function tingkat(){
        return $this->belongsTo(Tingkat::class);
    }

    // public function nilai(){
    //     return $this->hasTo(Nilai::class);
    // }

    // public function student(){
    //     return $this->belongsTo(Student::class);
    // }

    public function absen()
    {    
        return $this->belongsToMany(Student::class, 'absens', 'kelas_id', 'student_id')->withPivot('status', 'tanggal', 'keterangan')->wherePivot('tanggal', Carbon::now('Asia/Jakarta')->format('Y-m-d'));
    }
}
