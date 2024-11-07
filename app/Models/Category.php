<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guerded = false;

    /*
          За замовчуванням localKey вказує на id в categories, тобто первинний ключ,
          за яким визначається унікальна категорія.
          ми можемо шукати всі пости з posts, де category_id відповідає id у categories.
     */

    public function posts()
    {

        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
