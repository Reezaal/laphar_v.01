<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Loket extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('lokets')->insert([
            'Tanggal'=> $now ,
            'Migrasi'=>'3',
            'Multiguna'=>'1',
            'PB'=>'4',
            'PD'=>'7',
        ]);
        DB::table('lokets')->insert([
            'Tanggal'=> $now ,
            'Migrasi'=>'3',
            'Multiguna'=>'1',
            'PB'=>'4',
            'PD'=>'7',
        ]);
        DB::table('lokets')->insert([
            'Tanggal'=> $now ,
            'Migrasi'=>'3',
            'Multiguna'=>'1',
            'PB'=>'4',
            'PD'=>'7',
        ]);
    }
}
