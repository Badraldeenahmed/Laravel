<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * @test
     */
    function it_loads_the_user_list_page()
    {
        //$this->assertTrue(true);
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }
}
