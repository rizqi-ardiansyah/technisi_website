<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function test_example()
=======
    public function test_the_application_returns_a_successful_response()
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
