<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testHomeRoute()
   {
       $this->get('/')->assertSee('Star Wars Blog')->assertDontSee('Harry Potter');
      
   }

    public function testRegisterRoute()
    {
        $this->get('/register')->assertSee('Register')->assertDontSee('Logout');;
    }
    public function testLoginRoute()
    {
        $this->get('/login')->assertSee('Login')->assertDontSee('Voldemort');;
    }
    public function testNewPost() {
        $post = new Post();
        $post->title = 'Example Title';
        $post->body = 'Example Body';
        $post->user_id = 1;
        $post->category_id = 1;
        $post->slug = 'example-title';
        $post->excerpt = 'Example Excerpt';
        $this->assertEquals('Example Title', $post->title);
    }
    
   public function test404()
   {
       $this->get('/404')->assertStatus(404);
   }

    public function testUser() {
         $user = new User();
         $user->name = 'Example User';
         $this->assertEquals('Example User', $user->name);
    }

  

}
