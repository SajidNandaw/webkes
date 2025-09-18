<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'nama' => 'dr. Yulia Octaviany Harnoto, SpP',
                'spesialis' => 'DOKTER SPESIALIS PARU',
                'jadwal' => 'Rabu 15.00 - 19.00',
                'foto' => 'D8.jpg',
            ],
            [
                'nama' => 'dr. Azri Nurizal, Sp.PD, KKV',
                'spesialis' => 'DOKTER SPESIALIS JANTUNG',
                'jadwal' => 'Selasa 10.00 - 13.00',
                'foto' => 'D4.jpg',
            ],
            [
                'nama' => 'dr. Christin Santun Sriati Lumban Tobing, M.Gizi, Sp.GK',
                'spesialis' => 'DOKTER GIZI',
                'jadwal' => 'Rabu 09.00 - 12.00',
                'foto' => '.jpg',
            ],
            [
                'nama' => 'Dr. dr. Novi Reskiastanti, Sp.OG, Subsp.KFM',
                'spesialis' => 'DOKTER KANDUNGAN',
                'jadwal' => 'Selasa 10.00 - 13.00',
                'foto' => 'D5.jpg',
            ],
            [
                'nama' => 'dr. Deni Syahputra',
                'spesialis' => 'DOKTER UMUM',
                'jadwal' => 'Senin - Jumat 08.00 - 16.00',
                'foto' => 'D6.jpg',
            ],
            [
                'nama' => 'drg. Adisti Callindra',
                'spesialis' => 'DOKTER GIGI',
                'jadwal' => 'Jumat 09.00 - 12.00',
                'foto' => 'D7.jpg',
            ],
            [
                'nama' => 'dr. Melisa Handayani, Sp.A',
                'spesialis' => 'DOKTER ANAK',
                'jadwal' => 'Rabu & Sabtu 09.00 - 12.00',
                'foto' => 'D1.jpg',
            ],
            [
                'nama' => 'dr. Riska Amalia, Sp.KK',
                'spesialis' => 'DOKTER SPESIALIS KULIT',
                'jadwal' => 'Kamis 14.00 - 17.00',
                'foto' => 'D3.jpg',
            ],
            [
                'nama' => 'dr. Bayu Pratama, Sp.THT',
                'spesialis' => 'DOKTER SPESIALIS THT',
                'jadwal' => 'Selasa 09.00 - 12.00',
                'foto' => 'D12.jpg',
            ],
            [
                'nama' => 'dr. Amelia, Sp.B',
                'spesialis' => 'DOKTER BEDAH',
                'jadwal' => 'Jumat 13.00 - 16.00',
                'foto' => 'D9.jpg',
            ],
        ]);
    }
}
