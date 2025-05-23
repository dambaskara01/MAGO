<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisMagangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id_jenis_magang' => 1, 'nama_jenis_magang' => 'Magang Mandiri'],
            ['id_jenis_magang' => 2, 'nama_jenis_magang' => 'Magang Kampus Merdeka'],
        ];

        DB::table('m_jenis_magang')->insert($data);
    }
}
