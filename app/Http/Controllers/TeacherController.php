<?php

namespace App\Http\Controllers;

use App\Models\Pelajaran;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mapel'] = Pelajaran::all();
        $data['teachers'] = Teacher::with('mapel')->get();
        return view('/guru/index', $data);
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
        // $request->validate([
        //     'pelajaran_id'=>'required',
        //     'nip'=>'required',
        //     'nama'=>'required',
        //     'tgl_lahir'=>'required',
        //     'agama'=>'required',
        //     'alamat'=>'required',
        //     'pt'=>'required',
        //     'jurusan'=>'required',
        //     'thn_lulus'=>'required',
        //     'nmr_tlp'=>'required',
        // ]);

        Teacher::create($request->all());

        return redirect('/teachers');
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
        $teacher = Teacher::where('pelajaran_id', $id)->OrderBy('nama', 'asc')->get();
        $mapel = Pelajaran::findorFail($id);

        return view('/guru/show', compact('teacher','mapel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['mapel'] = Pelajaran::all();
        $data['teachers'] = Teacher::with('mapel')->first();
        return view('/guru/edit',$data);
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
            'nip'=>'required',
            'nama'=>'required',
            'tgl_lahir'=>'required',
            'agama'=>'required',
            'alamat'=>'required',
            'pt'=>'required',
            'jurusan'=>'required',
            'thn_lulus'=>'required',
            'nmr_tlp'=>'required',
        ]);

        $request->all();

        $teacher = Teacher::findorFail($id);
        $teacher->update($request->all());

        return redirect('/teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers = Teacher::findorFail($id);
        $teachers->delete();

        return redirect('/teachers');
    }
}
