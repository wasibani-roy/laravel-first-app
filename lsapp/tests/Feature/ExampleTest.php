<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testPostsTest()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
    public function testAboutTest()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
    public function testCreateTest()
    {
        $response = $this->get('/posts/create');

        $response->assertStatus(200);
    }
}
