<?php
// ini untuk mgasih tau laravel secara sesifik dimana kode ini berada
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;


/**
 * @property string $slug
 * @property string $title
 * @property string $author_and_date
 * @property string $isi
 */
class Articles extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'author_id',
        'isi',
        "category_id",

    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }


    // Opsi untuk jika kita mau merubah nama table
    // protected $table = "articles_kita";
    // Disini udah ada semua method nya
    // Disini ngg ada apa2 tapi dia bisa ngedeteksi sendiri bro

    // Global Scope
    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query
            ->when($filters['category'] ?? false, function ($query, $category) {
                $query->whereHas('category', function ($q) use ($category) {
                    $q->where('slug', $category);
                });
            })
            ->when($filters['search'] ?? false, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('isi', 'like', "%{$search}%");
                });
            });
    }
};
