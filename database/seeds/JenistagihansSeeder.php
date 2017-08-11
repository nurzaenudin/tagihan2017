<?php

use Illuminate\Database\Seeder;
use App\Jenistagihan;

class JenistagihansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenistagihan = new Jenistagihan();
		$jenistagihan->jenis = 'SPBY Uang Muka';
		$jenistagihan->save();
		
		$jenistagihan = new Jenistagihan();
		$jenistagihan->jenis = 'SPBY';
		$jenistagihan->save();
		
		$jenistagihan = new Jenistagihan();
		$jenistagihan->jenis = 'SPP Perjadin Nominatif';
		$jenistagihan->save();
		
		$jenistagihan = new Jenistagihan();
		$jenistagihan->jenis = 'SPP';
		$jenistagihan->save();

		//
    }
}
