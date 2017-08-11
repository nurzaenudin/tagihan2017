<?php

use Illuminate\Database\Seeder;
use App\Kodepembebanan;

class KodepembebanansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kodepembebanan = new Kodepembebanan();
		$kodepembebanan->kode = '-';
		$kodepembebanan->save();
		
		$kodepembebanan = new Kodepembebanan();
		$kodepembebanan->kode = '1632.003.051.A.521211';
		$kodepembebanan->save();
		
		$kodepembebanan = new Kodepembebanan();
		$kodepembebanan->kode = '1632.003.051.A.522151';
		$kodepembebanan->save();
		
		//
    }
}
