<?php

namespace App\Http\Controllers;

use App\Models\Tingkat;
use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tingkat'] = Tingkat::all();
        $data['kelas'] = Kelas::with('tingkat')->orderBy('nama_kelas','asc')->get();
        return view('/class/app', $data);
        // return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['Students'] = Student::all();
        $data['kelas'] = Kelas::all();
        return view('/class/create',compact('tingkat'));
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
            'tingkat_id'=>'required',
            'nama_kelas'=>'required'
        ]);

        Kelas::create($request->all());

        return redirect('/kelas');

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
        $data['students'] = Student::where('kelas_id', $id)->OrderBy('nama', 'asc')->get();
        $data['kelas'] = Kelas::findorFail($id);
        return view('/class/show',$data);
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
        $request->validate([
            'kd_kelas'=>'required',
            'kelas'=>'required',
        ]);
        $request->all();

        $kelas = Kelas::findorFail($id);
        $kelas->update($request->all());

        return redirect('/kelas');
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
