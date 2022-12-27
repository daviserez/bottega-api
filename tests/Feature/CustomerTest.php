<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('display the list of customers', function () {
    $response = $this->get('/customers');

    $response->assertStatus(200);
    $response->assertSeeText('John Doe');
    $response->assertSeeText('Janette Doe');
});
