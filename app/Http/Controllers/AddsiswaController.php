<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class AddsiswaController extends Controller
{
    public function siswa()
    {
        $data['students'] = Student::all();
        $data['kelas'] = Kelas::all();
        return view('/class/siswa/{kelas}', $data);
        // return $data;
    }

    public function add(Request $request)
    {
        $data['students'] = Student::all();
        $data['kelas'] = Kelas::all();

        $request->validate([
            'id_siswa'=>'required',
            'id_kelas'=>'required',
        ]);


    }
}
