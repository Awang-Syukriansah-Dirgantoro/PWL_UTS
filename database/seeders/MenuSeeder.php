<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'id' => '1',
            'kode_barang' => 'BRG01',
            'nama_barang' => 'Bakso',
            'kategori_barang' => 'makanan',
            'harga' => 5000,
            'qty' => 100
        ]);
    }
}
