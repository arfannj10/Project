<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Kelas;
use App\Models\Student;
use App\Models\Tingkat;
use App\Models\Nilai;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['tingkat'] = Tingkat::all();
        $data['kelas'] = Kelas::with('tingkat')->get();
        // $data['students'] = Student::with('kelas')->get();
        return view('/nilai/app', $data);
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pelajaran'] = Pelajaran::all();
        // $data['students'] = Student::where('kelas_id', $id)->first(); 
        $data['students'] = Student::with('kelas')->first();
        // return view('/nilai/create', $data);
        return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'student_id'=>'required',
            'pelajaran_id'=>'required',
            'kelas_id'=>'required',
            'uts'=>'required',
            'uat'=>'required'
        ]);

        // Nilai::create($request->all);

        // return redirect('/nilai');
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['students'] = Student::with('kelas')->OrderBy('nama', 'asc')->get();
        // $data['kelas'] = Kelas::with('students')->get();
        // $data['students']= Student::findorFail($id);
        return view('/nilai/show',$data);
        
        
        // return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $nilai = Nilai::findorFail($id);
        // return view('/nilai/edit', compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'kd_kelas'=>'required',
        //     'kelas'=>'required',
        // ]);
        // $request->all();

        // $nilai = Nilai::findorFail($id);
        // $nilai->update($request->all());

        // return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
