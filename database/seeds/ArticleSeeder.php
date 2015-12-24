<?php

# database/seeds/ArticleTableSeeder.php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    public function run()
    {
        Article::create([
            'title' => 'Article 1',
            'content' => 'This is content'
        ]);
        Article::create([
            'title' => 'Article 2',
            'content' => 'This is content'
        ]);
        Article::create([
            'title' => 'Article 3',
            'content' => 'This is content'
        ]);
        Article::create([
            'title' => 'Article 4',
            'content' => 'This is content'
        ]);


    }
}
