<?php

use Illuminate\Database\Seeder;
use App\Rekanan;

class RekanansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rekanan = new Rekanan();
		$rekanan->nama = '-';
		$rekanan->save();
		
		$rekanan = new Rekanan();
		$rekanan->nama = 'Alfa Midi';
		$rekanan->save();
		
		$rekanan = new Rekanan();
		$rekanan->nama = 'AW';
		$rekanan->save();
		
		$rekanan = new Rekanan();
		$rekanan->nama = 'Ayam Bakar Mas Mono';
		$rekanan->save();
		
		$rekanan = new Rekanan();
		$rekanan->nama = 'Ayam Betutu';
		$rekanan->save();
		//
    }
}