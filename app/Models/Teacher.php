<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $fillable = ['pelajaran_id','nip', 'nama','tmp_lahir', 'tgl_lahir','agama', 'alamat','pendidikan', 'pt', 'jurusan', 'thn_lulus','nmr_tlp'];
    
    public function mapel()
    {
        return $this->belongsTo('App\Models\Pelajaran')->withDefault();
    }
}
