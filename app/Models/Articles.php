<?php
// ini untuk mgasih tau laravel secara sesifik dimana kode ini berada
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

/**
 * @property string $slug
 * @property string $title
 * @property string $author_and_date
 * @property string $isi
 */
class Articles extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'author',
        'isi'
    ];

    // Opsi untuk jika kita mau merubah nama table
    // protected $table = "articles_kita";
    // Disini udah ada semua method nya
    // Disini ngg ada apa2 tapi dia bisa ngedeteksi sendiri bro
};
