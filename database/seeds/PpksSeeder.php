<?php

use Illuminate\Database\Seeder;
use App\Ppk;

class PpksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ppk = new Ppk();
		$ppk->nip = '196705061988021001';
		$ppk->nama = 'Wawan Mulyawan';
		$ppk->save();
		//
    }
}