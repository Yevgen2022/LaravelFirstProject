<?php
//
//namespace App\Models;
//
//use App\Models\Traits\Filterable;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
//
//class Post extends Model
//{
//    use HasFactory;
//    use Filterable;
//    use SoftDeletes;
//  //  protected $guerded = false;
//
//    protected $table = 'posts';
//    protected $guarded = [];
//
//
//    /*
//         У функції category() ми хочемо визначити категорію для конкретного поста.
//         Поле ownerKey вказує на поле у зв'язаній таблиці (categories),
//         яке буде порівнюватися із зовнішнім ключем category_id у posts.
//    */
//    public function category()
//    {
//
//        return $this->belongsTo(Category::class, 'category_id', 'id');
//    }
//
//    public function tags(){
//        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
//    }
//}


namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Filterable;

    protected $guarded = false;


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag', 'post_id', 'tag_id');
    }
}
