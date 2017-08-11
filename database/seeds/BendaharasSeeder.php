<?php

use Illuminate\Database\Seeder;
use App\Bendahara;

class BendaharasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bendahara = new Bendahara();
		$bendahara->nip = '198402122004121001';
		$bendahara->nama = 'Andi Viky Habibie';
		$bendahara->save();
		//
    }
}
