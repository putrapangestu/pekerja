<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proses;
use App\Http\Requests\ProsesRequest;
use Illuminate\Support\Facades\File;

class ProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;

        // $datas = Proses::all();
        $datas = Proses::where('nama', 'LIKE', '%'.$keyword.'%')
            ->orwhere('id', 'LIKE', '%'.$keyword.'%')
            ->orwhere('jenis_kelamin', 'LIKE', '%'.$keyword.'%')
            ->orwhere('agama', 'LIKE', '%'.$keyword.'%')
            ->get();
        return view('proses.list', compact(
            'datas', 'keyword'
        ));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Proses;

        return view('proses.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProsesRequest $request)
    {
        $model = new Proses;
        $model->id = $request->id;
        $model->nama = $request->nama;
        $model->jenis_kelamin = $request->jenis_kelamin;
        $model->agama = $request->agama;
        if($request->file('foto')){
            $file = $request->file('foto');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);

            File::delete("gambar", $model->foto);
            $model -> foto = $nama_file;
        }
        $model-> save();

        return redirect('proses');
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
        $model =  Proses::find($id);

        return view('proses.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProsesRequest $request, $id)
    {
        $model = Proses::find($id);
        $model -> id = $request -> id;
        $model -> nama = $request -> nama;
        $model -> jenis_kelamin = $request -> jenis_kelamin;
        $model -> agama = $request -> agama;
        if($request->file('foto')){
            $file = $request->file('foto');
            $nama_file = time().str_replace(" ","", $file->getClientOriginalName());
            $file->move('gambar', $nama_file);

            File::delete("gambar", $model->foto);
            $model -> foto = $nama_file;
        }
        $model -> save(); 

        return redirect('proses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Proses::find($id);
        $model->delete();

        return redirect('proses');
    }
}
