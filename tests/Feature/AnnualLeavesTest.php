<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnnualLeavesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAnnualLeavesValidation()
    {
       
    $data = [
        'user_id' => '',
        'date_from' => '',
        'date_to' => '',
        'reason' => '',
    ];

    $response = $this->post('/api/annual-leaves', $data);
    $response->assertStatus(422)
                ->assertJson([
                    'user_id' => ['The user id field is required.'],
                    'start_date' => ['The start date field is required.'],
                    'end_date' => ['The end date field is required.'],
                    'reason' => ['The reason field is required.'],
    ]);
    }
}
