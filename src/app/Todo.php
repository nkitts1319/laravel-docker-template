<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // Modelを介することでSQL文を組み立てることなくtodosテーブルを操作することができるようになる。
    protected $table = 'todos';

    protected $fillable = [
        'content',
    ];
}

/* php artisan make:model Todo コマンドを実行するとファイルの中に下記のコードが入っている。
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
}
*/