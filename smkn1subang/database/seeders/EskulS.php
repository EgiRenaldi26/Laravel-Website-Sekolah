<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class EskulS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eskul')->insert([
            'namaeskul'=> 'PASKIBRA ',
            'namapembina'=>'Asep Firman',
            'jumlahanggota'=>'80',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
        DB::table('eskul')->insert([
            'namaeskul'=> 'BADMINTON',
            'namapembina'=>'Guntur',
            'jumlahanggota'=>'40',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
