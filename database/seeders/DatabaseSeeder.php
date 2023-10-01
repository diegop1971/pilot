<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\OrderStatusTypeSeeder;
use Database\Seeders\StockMovementsTypeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'id' => Str::uuid()->toString(),
            'name' => 'Diego Puccio',
            'email' => 'diego.puccio@gmail.com',
            'password' => Hash::make('123456789'),
        ]);

        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(StockMovementsTypeSeeder::class);
        $this->call(OrderStatusTypeSeeder::class);
    }
}
