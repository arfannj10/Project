<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kelas'] = Kelas::all();
        return view('/absen/app',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('absen/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if($request['status'] == 'Hadir'){

            $request->Hadir = 1;  
            $request->Alfa = 0;
            $request->Izin = 0;
            $request->Sakit = 0;  

        } 
        elseif ($request['status'] == 'Alfa')   {

            $request->Hadir = 0;  
            $request->Alfa = 1;
            $request->Izin = 0;
            $request->Sakit = 0; 
        }
        elseif ($request['status'] == 'Izin')   {

            $request->Hadir = 0;  
            $request->Alfa = 0;
            $request->Izin = 1;
            $request->Sakit = 0; 
        }
        elseif ($request['status'] == 'Sakit')   {

            $request->Hadir = 0;  
            $request->Alfa = 0;
            $request->Izin = 0;
            $request->Sakit = 1; 
        }         

        Absen::create($request->all());
       
        return redirect('/absen');

        // return $check;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['carbon'] = Carbon::now();
        $data['students'] = Student::where('kelas_id', $id)->OrderBy('nama', 'asc')->get();
        $data['kelas'] = Kelas::findorFail($id);
        return view('/absen/show',$data);
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
        //
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
