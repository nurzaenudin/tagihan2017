<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(BooksSeeder::class);
		$this->call(BendaharasSeeder::class);
		$this->call(JenistagihansSeeder::class);
		$this->call(KodepembebanansSeeder::class);
		$this->call(PenerimahasilsSeeder::class);
		$this->call(PenerimauangsSeeder::class);
		$this->call(PpksSeeder::class);
		$this->call(RekanansSeeder::class);


    }
}
