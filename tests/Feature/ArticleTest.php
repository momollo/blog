<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Article;


class ArticleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
    *public function test_example(): void
    *{
     *   $response = $this->get('/');
*
 *       $response->assertStatus(200);
  *  }
*/
    public function test_vieu_articles(): void
    {
        $articles = Article::factory()->create([

            'title' => 'test-title',
            'body' => 'un peu plus de caracteur',

        ]);
        $response = $this->get('/articles');
        $response->assertStatus(200);
        $response->assertSee('test-title');
       // $response->assertSee('oz');


    }

    public function test_dellet_article():void
    {
        $articles = Article::factory()->create();

 $response = $this->delete("/articles/{$article->title}");

 $response->assertRedirect('articles');
 $this->assertDatabaseMissing('articles',['title' =>$article->title]);
         

    }
     
}

//sudo mysql -u root le reste est dans read my