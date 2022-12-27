<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Customer;

class TestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => 'John',
            'firstname' => 'Doe',
            'phone' => '+41795429187',
            'address' => 'grand-rue 12',
            'postcode' => '9264',
            'city' => 'Zürich',
        ]);

        DB::table('customers')->insert([
            'name' => 'Janette',
            'firstname' => 'Doe',
            'phone' => '+41763084362',
            'address' => 'villette 45',
            'postcode' => '1083',
            'city' => 'Neuchâtel',
        ]);
    }
}
