<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = "nilais";
    protected $fillable = ['student_id','pelajaran_id','kelas_id', 'uts', 'uat'];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function pelajaran(){
        return $this->belongsTo(Pelajaran::class);
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
