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
        DB::table('menus')->insert(
            [
                'id' => '1',
                'kode_barang' => 'BRG01',
                'nama_barang' => 'Bakso',
                'kategori_barang' => 'makanan',
                'harga' => 5000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '2',
                'kode_barang' => 'BRG02',
                'nama_barang' => 'Aqua',
                'kategori_barang' => 'minuman',
                'harga' => 3000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '3',
                'kode_barang' => 'BRG03',
                'nama_barang' => 'Krupuk',
                'kategori_barang' => 'desert',
                'harga' => 1000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '4',
                'kode_barang' => 'BRG04',
                'nama_barang' => 'Kacang',
                'kategori_barang' => 'cemilan',
                'harga' => 1000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '5',
                'kode_barang' => 'BRG05',
                'nama_barang' => 'Mie Ayam',
                'kategori_barang' => 'makanan',
                'harga' => 8000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '6',
                'kode_barang' => 'BRG06',
                'nama_barang' => 'Es Teh',
                'kategori_barang' => 'minuman',
                'harga' => 3000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '7',
                'kode_barang' => 'BRG07',
                'nama_barang' => 'Es Krim',
                'kategori_barang' => 'desert',
                'harga' => 6000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '8',
                'kode_barang' => 'BRG08',
                'nama_barang' => 'Kripik pedas',
                'kategori_barang' => 'camilan',
                'harga' => 1000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '9',
                'kode_barang' => 'BRG09',
                'nama_barang' => 'Nasi Goreng',
                'kategori_barang' => 'makanan',
                'harga' => 10000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '10',
                'kode_barang' => 'BRG10',
                'nama_barang' => 'Es Jeruk',
                'kategori_barang' => 'minuman',
                'harga' => 5000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '11',
                'kode_barang' => 'BRG11',
                'nama_barang' => 'Puding',
                'kategori_barang' => 'desert',
                'harga' => 3000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '12',
                'kode_barang' => 'BRG12',
                'nama_barang' => 'Kripik Manis',
                'kategori_barang' => 'cemilan',
                'harga' => 1000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '13',
                'kode_barang' => 'BRG13',
                'nama_barang' => 'Rawon',
                'kategori_barang' => 'Makanan',
                'harga' => 10000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '14',
                'kode_barang' => 'BRG14',
                'nama_barang' => 'Es  Jeruk Nipis',
                'kategori_barang' => 'Minuman',
                'harga' => 3000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '15',
                'kode_barang' => 'BRG15',
                'nama_barang' => 'Coklat',
                'kategori_barang' => 'desert',
                'harga' => 3000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '16',
                'kode_barang' => 'BRG16',
                'nama_barang' => 'Chitato',
                'kategori_barang' => 'camilan',
                'harga' => 2000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '17',
                'kode_barang' => 'BRG17',
                'nama_barang' => 'Soto',
                'kategori_barang' => 'makanan',
                'harga' => 10000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '18',
                'kode_barang' => 'BRG18',
                'nama_barang' => 'Susu Kental Manis',
                'kategori_barang' => 'minuman',
                'harga' => 5000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '19',
                'kode_barang' => 'BRG19',
                'nama_barang' => 'Macaron',
                'kategori_barang' => 'desert',
                'harga' => 5000,
                'qty' => 100
            ]
        );
        DB::table('menus')->insert(
            [
                'id' => '20',
                'kode_barang' => 'BRG20',
                'nama_barang' => 'Coki Coki',
                'kategori_barang' => 'camilan',
                'harga' => 2000,
                'qty' => 100
            ]
        );
    }
}
