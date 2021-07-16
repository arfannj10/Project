<?php

namespace App\Http\Controllers;

use App\Models\Tingkat;
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
        $data['tingkat'] = Tingkat::all();
        $data['kelas'] = Kelas::with('tingkat')->get();
        return view('/students/app', $data);
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
        // $request->validate([
        //     'nis'=>'required',
        //     'nama'=>'required',
        //     'tgl_lahir'=>'required',
        //     'alamat'=>'required',
        //     'sekolah'=>'required',
        //     'kelas'=>'required',
        //     'tingkat'=>'required',
        //     'nama_ayah'=>'required',
        //     'nama_ibu'=>'required',
        //     'nmr_tlp'=>'required'
        // ]);

        // Student::create([
        //     'nis'=> $request->nis,
        //     'nama'=> $request->nama,
        //     'tgl_lahir'=> $request->tgl_lahir,
        //     'alamat'=> $request->alamat,
        //     'kelas'=> $request->kelas,
        //     'sekolah'=> $request->sekolah,
        //     'tingkat'=> $request->tingkat,
        //     'nma_ayah'=> $request->nama_ayah,
        //     'nama_ibu'=> $request->nama_ibu,
        //     'nmr_tlp'=> $request->nmr_tlp,
        // ]);

        Student::create($request->all());
        return redirect()->back()->with('succes', 'Data berhasil diinput !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['students'] = Student::where('tingkat_id', $id)->OrderBy('nama', 'asc')->get();
        $data['kelas'] = Kelas::findorFail($id);
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

}
