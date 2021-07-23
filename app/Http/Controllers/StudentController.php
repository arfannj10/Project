<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['students']= Student::with('kelas')->get();
        $data['kelas'] = Kelas::all();
        return view('/students/app', $data);

        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'kelas_id' => 'required',
            'nama' => 'required',
            'nis' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'tingkat_id' => 'required',
            'sekolah' => 'required',
            'kelas' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'nmr_tlp' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->back();

        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['students'] = Student::with('kelas')->get();
        return view('/students/show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kelas']= Kelas::all();
        $data['students'] = Student::with('kelas')->first();
        return view('/students/edit',$data);
        // return $data;
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

        $data['students'] = Student::findorFail($id);
        $data['students']->update($request->all());

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::findorFail($id);
        $students->delete();

        return redirect()->back();
    }
    
    public function profile($id)
    {
        $data['students'] = Student::with('kelas')->first();
        return view('/students/profil',$data);
    }
}
