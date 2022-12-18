<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TemaController extends Controller
{
    public function index(){
        $tema = Tema::all();
        return view('tema1.index')->with('tema', $tema);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tema1.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'id_tema' => 'required',
            'nama' => 'required',
            'pekerjaan' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:5000',
            'no_wa' => 'required',
            'nama_ig' => 'required',
            'email' => 'required',
            'hobi1' => 'required',
        ]);
        
        $tema = new Tema();
        $tema->fill($data);

         // file
         $dir = "fotouser/" . now()->getTimestamp();
         $path = $request
             ->file('foto')
             ->storePubliclyAs($dir, "foto.{$request->file('foto')->extension()}");
            $tema->foto = Str::of($path)->replace('public', 'storage')->toString();

        $tema->save();
        return redirect('/tema'); 
    }

   

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tema = Tema::where('id', $id)->first();
        return view('tema1.show', ['tema' => $tema]);
    }
    public function show2($id)
    {
        $tema = Tema::where('id', $id)->first();
        return view('tema2.show', ['tema' => $tema]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tema = Tema::where('id', $id)->first();
        return view('tema1.edit', ['tema' => $tema]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tema = Tema::where('id', $id)->first();
        $data = $request->all();

        if (!$request->file("foto")) {
            $tema->fill($data);
            $tema->save();
        } if ($request->file("foto")) {
            $tema->fill($data);

            // foto anda
            $dir = "fotouser/" . now()->getTimestamp();
            $path = $request
                ->file('foto')
                ->storePubliclyAs($dir, "foto.{$request->file('foto')->extension()}");
            $tema->foto = Str::of($path)->replace('public', 'storage')->toString();
            $tema->save();

        }
        return redirect('/tema')->with('flash_message', 'Data Ekonomi Kreatif berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tema = Tema::find($id);
        Storage::delete(Str::of($tema->foto)->replace('storage', 'public')->toString());
        $tema->delete();
       
        return redirect('/tema')->with('flash_message', 'Data Ekonomi Kreatif dihapus');
    }
}
