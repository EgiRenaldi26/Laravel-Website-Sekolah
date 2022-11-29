<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PesertadidikS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesertadidik')->insert([
            'nis'=> '12100707   ',
            'namalengkap'=> 'Egi Renaldi',
            'jk'=>'L',
            'kelas'=>'11 - RPL - 1',
            'alamat'=>'jujung',
            'status'=>'Pacar',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
        DB::table('pesertadidik')->insert([
            'nis'=> '121000808',
            'namalengkap'=> 'Syawali',
            'jk'=>'L',
            'kelas'=>'11 - RPL - 1',
            'alamat'=>'Wanasari',
            'status'=>'Pacar',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
        DB::table('pesertadidik')->insert([
            'nis'=> '121000809',
            'namalengkap'=> 'SANDI',
            'jk'=>'L',
            'kelas'=>'11 - RPL - 1',
            'alamat'=>'sembung',
            'status'=>'Pacar',
            'created_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
