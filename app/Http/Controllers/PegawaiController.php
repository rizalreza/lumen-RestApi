<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller

{
	public function showAllPegawai()
	{
		return response()->json(Pegawai::all());
	}


	public function showOnePegawai($id)
	{
		return response()->json(Pegawai::find($id));
	}


	public function create(Request $request)
	{
		$pegawai = Pegawai::create($request->all());
		return response()->json($pegawai, 201);
	}


	public function update($id, Request $request)
	{
		$pegawai = Pegawai::findOrFail($id);

		$pegawai->update($request->all());

		return response()->json($pegawai, 200);
	}

	public function delete($id)
	{
		Pegawai::findOrFail($id)->delete();
		return response('Deleted successfuly', 200);
	}


}