<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller

{
	public function showAllJabatan()
	{
		return response()->json(Jabatan::all());
	}


	public function showOneJabatan($id)
	{
		return response()->json(Jabatan::find($id));
	}


	public function create(Request $request)
	{
		$jabatan = Jabatan::create($request->all());
		return response()->json($jabatan, 201);
	}


	public function update($id, Request $request)
	{
		// print_r($request->all());exit;
		$jabatan = Jabatan::findOrFail($id);

		$jabatan->update($request->all());

		return response()->json($jabatan, 200);
	}

	public function delete($id)
	{
		Jabatan::findOrFail($id)->delete();
		return response('Deleted successfuly', 200);
	}


}