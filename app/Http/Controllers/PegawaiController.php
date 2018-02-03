<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;
use DB;

class PegawaiController extends Controller

{
	public function showAllPegawai()
	{
		$users = DB::table('pegawais')
            ->join('jabatans', 'jabatans.id', '=', 'pegawais.jabatan_id')
            ->select()
            ->get();
		// return response()->json(Pegawai::all());
		return response()->json($users);
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
		// print_r($request->all());exit;
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