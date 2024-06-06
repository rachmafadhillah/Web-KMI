<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departemen')->insert([
            'image' =>'20211223013633.png',
            'jabatan' => 'Ketua',
            'name' => 'siapa',
            'jurusan' => 'if',
            'angkatan' => '2021'
        ]);
    }
}
