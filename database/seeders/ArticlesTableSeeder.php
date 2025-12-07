<?php

namespace Database\Seeders;

use App\Models\Articles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "slug" => "bangun-pagi-tapi-malas",
                "title" => "Bangun Pagi Tapi Masih Malas? Ini Tipsnya!",
                "author" => "Ananda Salwa Pratama",
                "isi" => "Mulai hari dengan rutinitas sederhana bisa bikin energi naik. Cukup sarapan ringan, minum air, dan stretching 5 menit sudah cukup untuk bikin tubuh dan pikiran lebih segar sepanjang hari."
            ],
            [
                "slug" => "belajar-sambil-ngopi",
                "title" => "Belajar Sambil Ngopi, Produktivitas Makin Mantap",
                "author" => "Siabis",
                "isi" => "Belajar sesuatu yang baru sambil menikmati kopi favorit bisa membuka perspektif baru. Catat hal penting dan jangan takut mencoba metode belajar unik agar tetap semangat."
            ],
            [
                "slug" => "meditasi-sambil-nonton",
                "title" => "Meditasi Sambil Nonton? Bisa Kok!",
                "author" => "Myanmar",
                "isi" => "Menjaga kesehatan mental penting. Luangkan waktu untuk meditasi singkat atau teknik relaksasi sambil menikmati hiburan ringan agar pikiran tetap tenang dan fokus."
            ],
            [
                "slug" => "teknologi-biar-ga-bete",
                "title" => "Teknologi Biar Ga Bete? Ini Caranya!",
                "author" => "Arab",
                "isi" => "Teknologi bisa bikin hidup lebih mudah jika digunakan bijak. Gunakan aplikasi untuk produktivitas, manajemen keuangan, atau belajar hal baru sehingga hari-hari lebih menyenangkan."
            ]
        ];


        foreach ($data as $item) {
            Articles::updateOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }
    }
}
