<?php

namespace App\Http\Controllers;

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
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_lengkap' => 'required',
                'gender' => 'required|in:Laki-laki,Perempuan',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required|date',
                'gambar' => 'required|image|mimes:jpg,jpeg,png',
                'sertifikat' => 'nullable|mimes:zip,rar',
                'cv' => 'nullable|mimes:pdf',
            ],
            [
                'nama_lengkap.required' => 'Nama lengkap harus diisi',
                'gender.required' => 'Gender harus diisi',
                'gender.in' => 'Gender harus berupa antara Laki-laki atau Perempuan',
                'tempat_lahir.required' => 'Tempat lahir harus diisi',
                'tanggal_lahir.required' => 'Tanggal lahir harus diisi',
                'gambar.required' => 'Gambar harus diisi',
                'gambar.image' => 'Gambar harus berupa gambar',
                'gambar.mimes' => 'Gambar harus berupa gambar yang berformat jpg, jpeg, atau png',
                'sertifikat.mimes' => 'Sertifikat harus berupa file yang berformat zip, rar',
                'cv.mimes' => 'CV harus berupa file yang berformat pdf',
            ]
        );

        $mahasiswa = new Student();
        $mahasiswa->nama_lengkap = $request->nama_lengkap;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->tempat_lahir = $request->tempat_lahir;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->gambar = $request->gambar->store('gambar');
        if ($request->hasFile('sertifikat')) $mahasiswa->sertifikat = $request->sertifikat->store('sertifikat');
        if ($request->hasFile('cv')) $mahasiswa->cv = $request->cv->store('cv');
        $mahasiswa->save();

        return to_route('index')->with('success', 'Data berhasil ditambahkan');
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
        //
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
