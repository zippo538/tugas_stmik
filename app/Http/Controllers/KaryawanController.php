<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = karyawan::orderBy('name', 'asc')->get();

        return view('karyawan.karyawan-master', [
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.karyawan-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100|unique:karyawan',
            'umur' => 'required|numeric',
            'alamat' => 'required',
            'gaji' => 'required|numeric',
            'jabatan' => 'required',
        ]);

        $karyawan = karyawan::create($request->all());

        Alert::success('Success', 'karyawan has been saved !');
        return redirect('/karyawan');
    }

    /**
     * Display the specified resource.
     */
    public function show(karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $karyawan = karyawan::findOrFail($id);

        return view('karyawan.karyawan-edit', [
            'karyawan' => $karyawan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_karyawan)
    {
        $validated = $request->validate([
            'name' => 'required|max:100|unique:karyawan,name,' . $id_karyawan . ',id_karyawan',
            'umur' => 'required|numeric',
            'alamat' => 'required',
            'gaji' => 'required|numeric',
            'jabatan' => 'required',
        ]);

        $karyawan = Karyawan::findOrFail($id_karyawan);
        $karyawan->update($validated);

        Alert::info('Success', 'karyawan has been updated !');
        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_karyawan)
    {
        try {
            $deletedkaryawan = karyawan::findOrFail($id_karyawan);

            $deletedkaryawan->delete();

            Alert::error('Success', 'karyawan has been deleted !');
            return redirect('/karyawan');
        } catch (Exception $ex) {
            Alert::warning('Error', 'Cant deleted, karyawan already used !');
            return redirect('/karyawan');
        }
    }
}
