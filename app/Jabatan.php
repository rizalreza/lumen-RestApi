<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
	protected $fillable =[
	'jabatan','jobdesk'];


	public function pegawai()
	{
		return $this->belongsTo('App\Pegawai');
	}
}
