<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function user_can_see_home_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /** @test */
    public function user_can_see_car_form()
    {
        $response = $this->get('/automobiliu_forma');

        $response->assertStatus(200);
    }
}
