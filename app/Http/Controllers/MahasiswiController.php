<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswi as Mahasiswi;
use Illuminate\Http\Request;

class MahasiswiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswis = Mahasiswi::all();
        return view('index', compact('mahasiswis'));
    }

    public function about()
    {
        return view('about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswi = new Mahasiswi([
            'nama' => $request->input('nama'),
            'nrp' => $request->input('nrp'),
            'alamat' => $request->input('alamat'),
            'email' => $request->input('email')
        ]);
        $mahasiswi->save();
        return \redirect('/');
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
        $mahasiswi = Mahasiswi::find($id);
        return view('edit', compact('mahasiswi'));
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
        $mahasiswi = Mahasiswi::find($id);
        $mahasiswi->nama = $request->input('nama');
        $mahasiswi->nrp = $request->input('nrp');
        $mahasiswi->alamat = $request->input('alamat');
        $mahasiswi->email = $request->input('email');
        $mahasiswi->save();
        return \redirect('/');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswi = Mahasiswi::find($id);
        $mahasiswi->delete();
        return \redirect('/');
        // return $id;
    }
}
