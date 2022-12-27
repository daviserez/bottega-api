<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

use Database\Seeders\TestsSeeder;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    
    /**
     * Run a specific seeder before each test.
     *
     * @var string
     */
    protected $seeder = TestsSeeder::class;

    /**
     * Indicates whether the default seeder should run before each test.
     *
     * @var bool
     */
    protected $seed = true;
}
