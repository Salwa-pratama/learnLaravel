<?php

namespace Database\Seeders;

use App\Models\Tbmhs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TbmhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "nama_mhs" => "Ananda salwa pratama",
                "alamat" => "DSN Babadan",
                "id_fakultas" => 1,
            ],
            [
                "nama_mhs" => "Chilmi Kita",
                "alamat" => "DSN Babadan",
                "id_fakultas" => 1,
            ],
            [
                "nama_mhs" => "Chilmi dia",
                "alamat" => "DSN Babadan",
                "id_fakultas" => 1,
            ],
        ];


        foreach ($data as $item) {
            Tbmhs::updateOrCreate(
                ['nama_mhs' => $item['nama_mhs']],
                $item
            );
        }
    }
}
