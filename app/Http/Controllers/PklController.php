<?php

namespace App\Http\Controllers;

use App\Models\Pkl;
use App\Models\Siswa;
use App\Models\Dudi;
use Illuminate\Http\Request;
use Illmuiante\Support\Facades\Storage;

class PklController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pkl = Pkl::with('siswa', 'dudi')->latest()->paginate(5);

        return view('pkl.index', compact('pkl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas =Siswa::all();
        $dudis =Dudi::all();
        return view('pkl.create', compact('siswas', 'dudis'));
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
            'id_siswa' => 'required',
            'id_dudi' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
        ]);

        Pkl::create([
            'id_siswa' => $request->id_siswa,
            'id_dudi' => $request->id_dudi,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_keluar' => $request->tgl_keluar,
        ]);

        return redirect()->route('pkl.index')->with(['success' => 'Data Berhasil Disimpan' ]);
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
        $pkl = Pkl::findOrFail($id);
        $siswas = Siswa::all();
        $dudis = Dudi::all();
        return view('pkl.edit', compact('pkl', 'siswas', 'dudis'));
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
            'id_siswa' => 'required',
            'id_dudi' => 'required',
            'tgl_masuk' => 'required',
            'tgl_keluar' => 'required',
        ]);

        Pkl::update([
            'id_siswa' => $request->id_siswa,
            'id_dudi' => $request->id_dudi,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_keluar' => $request->tgl_keluar,
        ]);

        return redirect()->route('pkl.index')->with(['succes' => 'Data Berhasil Diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pkl = Pkl::findOrFail($id);
        $pkl->delete();

        //redirect to index
        return redirect()->route('pkl.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
