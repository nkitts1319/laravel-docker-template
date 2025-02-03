<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model // ModelでSQL文を書かずに、todosテーブルを操作できる。
{
    protected $table = 'todos';

    protected $fillable = [
        'content',
    ];
}



/* php artisan make:model Todo コマンドを実行すると元から下記のコードが入っている。
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
}
*/