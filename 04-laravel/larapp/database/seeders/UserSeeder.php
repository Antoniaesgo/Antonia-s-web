<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //Add a record with Eloquent ORM
        $user = new User;
        $user->document = 75000001;
        $user->fullname = "Jeremias Springfield";
        $user->gender="Male";
        $user->birthdate="1990-12-01";
        $user->photo = "jeremias.png";
        $user->phone = 312000001;
        $user->email = "jeremias@gmail.com";
        $user->password = bcrypt('admin');
        $user->role = "Admin";
        $user->save();


        //Add a record with Array
        DB::table('users')->insert([
            'document' => 75000002,
            'fullname' => 'barbie',
            'gender'=> "Female",
        'birthdate'=>"1990-12-09",
            'photo' => 'barbie.png',
            'phone' => 320000002,
            'email' => 'barbie@gmail.com',
            'password' => bcrypt('12345')
        ]);
    }
}


