<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRedirectedNoLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUserRedirectedNoLogin()
    {
        $response = $this->get('/home');

        //$response->assertStatus(200);
        $response->assertRedirect(route('login'));
    }
}
