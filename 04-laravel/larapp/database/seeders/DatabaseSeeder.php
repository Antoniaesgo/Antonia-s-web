<?php


namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():  void
    {
        $this->call([
            UserSeeder::class,
            PetSeeder::class
        ]);
      
        \app\Models\User::factory(50)->create();
        
        $this->call([AdoptionSeeder::class]);




      //   \App\Models\User::factory(100)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
