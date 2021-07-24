<?php

namespace App\Models;

use App\Models\Kelas;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = ['kelas_id','nama','nis', 'tgl_lahir', 'alamat', 'sekolah', 'kelas','nama_ayah', 'nama_ibu', 'nmr_tlp'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class)->withDefault();
    }
    
    public function pelajaran()
    {
        return $this->hasMany(Pelajaran::class);
    }

    // public function nilai()
    // {
    //     return $this->hasMany(Nilai::class);
    // }

    public function absensi()
    {   
        return $this->belongsToMany(Absen::class, 'absens', 'student_id', 'kelas_id')->withPivot('status', 'tanggal', 'keterangan')->wherePivot('tanggal', Carbon::now('Asia/Jakarta'));
    }
    
}
