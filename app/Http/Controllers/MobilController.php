<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;
use Validator;
use App\Produsen;
use Storage;
use Session;

class MobilController extends Controller
{

    //Index
    public function index() {
        $halaman = 'mobil';
        $mobil_list = Mobil::orderBy('id_mobil','asc')->Paginate('5');      
        $jumlah_mobil = Mobil::count();
        return view('mobil.index', compact('halaman', 'mobil_list', 'jumlah_mobil'));
    }


    //Show Detail
    public function show($id) {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }


    //Create
    public function create() {
        $list_produsen = Produsen::pluck('nama_produsen', 'id');
        return view('mobil.create', compact('list_produsen'));
    }

    //Create
    public function store(Request $request) {
        $input =  $request->all();

        //Validator
        $validator = Validator::make($input, [
            'id_mobil'      => 'required|string|size:4|unique:mobil,id_mobil',
            'nama_mobil'    => 'required|string|max:50',
            'harga'         => 'required|string|max:10',
            'tahun'         => 'required|numeric',
            'id_produsen'   => 'required',
            'foto'          => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500|dimensions:width=150,height:180',
        ]);

        if ($validator->fails()) {
            return redirect('mobil/create')
            ->withInput()
            ->withErrors($validator);
        }

        // Upload Foto
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->uploadFoto($request);
        }

        //create data mobil
        $mobil = Mobil::create($input);

        return redirect('mobil');
    }


    //Edit
    public function edit($id) {
        $mobil = Mobil::findOrFail($id);
        $list_produsen = Produsen::pluck('nama_produsen', 'id');
        return view('mobil.edit', compact('mobil', 'list_produsen'));
    }


    //Update
    public function update($id, Request $request) {
        $mobil = Mobil::findOrFail($id);
        $input = $request->all();

        //Validator
        $validator = Validator::make($input, [
            'id_mobil'    => 'required|string|size:4|unique:mobil,id_mobil,'.$request->input('id'),
            'nama_mobil'  => 'required|string|max:50',
            'harga'       => 'required|string|max:10',
            'tahun'       => 'required|numeric',
            'id_produsen' => 'required',
            'foto'        => 'sometimes|nullable|image|mimes:jpeg,jpg,png|max:500|dimensions:width=150,height:180',
        ]);

        if ($validator->fails()) {
                return redirect('mobil/' .$id. '/edit')
                ->withInput()
                ->withErrors($validator);
            }

        //Update foto
        if ($request->hasFile('foto')) {
            $input['foto'] = $this->updateFoto($id, $request);
        }


        //Update mobil
        $mobil->update($input);

        return redirect('mobil');
    }


    public function destroy($id) {
        $mobil = Mobil::findOrFail($id);

        // Hapus foto jika ada
        $this->hapusFoto($id);
        $mobil->delete();
        return redirect('mobil');
    }


    //Upload foto
    private function uploadFoto(Request $request) {
        $foto = $request->file('foto');
        $ext  = $foto->getClientOriginalExtension();

        if ($request->file('foto')->isValid()) {
            $foto_name = date('YmdHis'). ".$ext";
            $foto->move('fotoupload', $foto_name);
            return $foto_name;
        }
        return false;
    }


    // Update foto
    private function updateFoto($id, Request $request) {
        $mobil = Mobil::findOrFail($id);

        // jika user mengisi foto
        if ($request->hasFile('foto')) {

            //hapus foto lama jika ada foto baru
            $exist = Storage::disk('foto')->exists($mobil->foto);
            if (isset($mobil->foto) && $exist) {
                $delete = Storage::disk('foto')->delete($mobil->foto);
            }

            // Upload foto baru
            $foto = $request->file('foto');
            $ext  = $foto->getClientOriginalExtension();
            if ($request->file('foto')->isValid()) {
                $foto_name = date('YmdHis'). ".$ext";
                $foto->move('fotoupload', $foto_name);
                return $foto_name;
            }
        }
    }

    // Hapus foto jika ada
    private function hapusFoto($id) {
        $mobil = Mobil::findOrFail($id);
        $is_foto_exist = Storage::disk('foto')->exists($mobil->foto);

        if ($is_foto_exist) {
            Storage::disk('foto')->delete($mobil->foto);
        }
    }
}
