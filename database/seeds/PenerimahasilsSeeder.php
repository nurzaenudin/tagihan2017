<?php

use Illuminate\Database\Seeder;
use App\Penerimahasil;

class PenerimahasilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penerimahasil = new Penerimahasil();
		$penerimahasil->nip = '198210212002121001';
		$penerimahasil->nama = 'Ignatius Renata Oktavian';
		$penerimahasil->save();
		//
    }
}