<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produsen;
use Validator;
use Session;

class ProdusenController extends Controller
{
    protected function index() {
    	$produsen_list = Produsen::all();
    	return view('produsen.index', compact('produsen_list'));
    }

    protected function create() {
    	return view('produsen.create');
    }

    public function store(Request $request) {
    	$data = $request->all();

    	$validasi = Validator::make($data, [
    		'nama_produsen' => 'required|max:50|unique:produsen,nama_produsen',
    		'keterangan' => 'required|max:100'
    	]);

    	if ($validasi->fails()) {
    		return redirect('produsen/create')
    		->withInput()
    		->withErrors($validasi);
    	}

    	Produsen::create($data);
    	Session::flash('flash_message', 'Data Patner Perusahaan berhasil disimpan');

    	return redirect('produsen');
    }

    public function show($id) {
    	return redirect('produsen');
    }

    protected function edit($id) {
    	$produsen = Produsen::findOrfail($id);
    	return view('produsen.edit', compact('produsen'));
    }

    public function update($id, Request $request) {
    	$produsen = Produsen::findOrfail($id);
    	$data = $request->all();

    	$validasi = Validator::make($data, [
    		'nama_produsen' => 'required|max:50',
    		'keterangan'    => 'required|max:100'
    	]);

    	if ($validasi->fails()) {
    		return redirect('produsen/create')
    		->withInput()
    		->withErrors($validasi);
    	}

    	$produsen->update($data);
    	Session::flash('flash_message', 'Data Patner Perusahaan berhasil di update');

    	return redirect('produsen');
    }

    protected function destroy($id) {
    	$produsen = Produsen::findOrfail($id);
    	$produsen->delete();

    	Session::flash('flash_message', 'Data Patner Perusahaan berhasil di hapus');
    	Session::flash('penting', true);

    	return redirect('produsen');

    }
}
