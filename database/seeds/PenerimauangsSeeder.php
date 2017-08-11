<?php

use Illuminate\Database\Seeder;
use App\Penerimauang;

class PenerimauangsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penerimauang = new Penerimauang();
		$penerimauang->nip = '196108121984031001';
		$penerimauang->nama = 'Dwi Satoto Agus Murtono';
		$penerimauang->save();
		
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '196202011983101001';
		$penerimauang->nama = 'Murgani';
		$penerimauang->save();
		
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '196203051989111001';
		$penerimauang->nama = 'Taryono Suyono';
		$penerimauang->save();
		
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '196705211992022001';
		$penerimauang->nama = 'Reny Rosmeini';
		$penerimauang->save();
		
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '197205191993031017';
		$penerimauang->nama = 'Iwan Umbara';
		$penerimauang->save();
	
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '197311141993031001';
		$penerimauang->nama = 'Latu Herry';
		$penerimauang->save();
		
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '198609012014022002';
		$penerimauang->nama = 'Ika Dwijati';
		$penerimauang->save();
		
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '198710192010122009';
		$penerimauang->nama = 'Aryati Ida Puspitasari';
		$penerimauang->save();
		
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '198807242009122001';
		$penerimauang->nama = 'Yuli Setyowati';
		$penerimauang->save();
		
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '199007172010121002';
		$penerimauang->nama = 'Nur Zaenudin';
		$penerimauang->save();
		
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '199204022014111001';
		$penerimauang->nama = 'Wahyu Fauzi A R';
		$penerimauang->save();
		
		$penerimauang = new Penerimauang();
		$penerimauang->nip = '199208162014111003';
		$penerimauang->nama = 'Putra Indrayana';
		$penerimauang->save();
		//
    }
}