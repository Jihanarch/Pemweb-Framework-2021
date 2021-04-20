<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class Coba extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mahasiswa = Mahasiswa::all();  
      return view ('welcome2',compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nim'=>'required',
            'nama'=>'required',
            'angkatan'=>'required',
            'email'=>'required',
            'telp'=>'required'
        ]);
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_lengkap = $request->nama;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->email = $request->email;
        $mahasiswa->telp = $request->telp;
        $mahasiswa->save();
        return redirect(route('home')) ->with('successMsg','New Mahasiswa Successfully Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);  
      return view ('edit',compact('mahasiswa'));
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
        $this->validate($request, [
            'nim'=>'required',
            'nama'=>'required',
            'angkatan'=>'required',
            'email'=>'required',
            'telp'=>'required'
        ]);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama_lengkap = $request->nama;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->email = $request->email;
        $mahasiswa->telp = $request->telp;
        $mahasiswa->save();
        return redirect(route('home')) ->with('successMsg','Mahasiswa Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Mahasiswa::find($id) -> delete();
         return redirect(route('home')) ->with('successMsg','Mahasiswa Successfully Deleted!');
    }

    public function generate(){
        for ($i=0; $i < 10000; $i++) {
            $mahasiswa = new Mahasiswa;
            $mahasiswa->nim = '2020'.$i;
            $mahasiswa->nama_lengkap = "Siswa" . $i;
            $mahasiswa->angkatan = '2021';
            $mahasiswa->email = "siswa".$i."@student.uns.ac.id";
            $mahasiswa->telp = "08122000".$i;
            $mahasiswa->save();
        }
        echo "Mahasiswa telah selesai digenerate!";
    }

    public function getdatanochunk(){
        $time_start = microtime(true);
        $begin = memory_get_usage();
        foreach (Mahasiswa::all() as $siswa) {
            echo $siswa->id.'<br>';
        }
        $time_end=microtime(true);
        echo '<b>Total memory usage :</b> ' . (memory_get_usage() - $begin).'<br>';
        $execution_time = ($time_end - $time_start);
        echo '<b>Total Execution Time:</b> '.($execution_time*1000).'Milliseconds'.'<br>';
    }

    public function getdatachunk(){
        $time_start = microtime(true);
        $begin = memory_get_usage();
        Mahasiswa::chunk(300,function($mahasiswas){ 
            foreach ($mahasiswas as $siswa) 
            {
            echo $siswa->id.'<br>';
            }
        });
       
        $time_end=microtime(true);
        echo '<b>Total memory usage :</b> ' . (memory_get_usage() - $begin).'<br>';
        $execution_time = ($time_end - $time_start);
        echo '<b>Total Execution Time:</b> '.($execution_time*1000).'Milliseconds'.'<br>';
    }



}
