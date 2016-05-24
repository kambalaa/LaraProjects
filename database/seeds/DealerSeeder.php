<?php

use Illuminate\Database\Seeder;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('dealers')->insert([
        ['name' => "Dealer 1", 'description' => 'First description'],
        ['name' => "Dealer 2", 'description' => 'Second description'],
        ['name' => "Dealer 3", 'description' => 'Third description'],
        ['name' => "Dealer 4", 'description' => 'Fourth description'],
        ['name' => "Dealer 5", 'description' => 'Fifth description'],
        ['name' => "Dealer 6", 'description' => 'Sixth description'],

      ]);
    }
}
