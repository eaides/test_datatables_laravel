<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $userAdmin = factory(User::class)->create([
            'name' => 'Ernesto Aides',
            'email' => 'eaides@hotmail.com',
            'password' => bcrypt('ena2101'),
        ]);

        $userNormal = factory(User::class)->create([
            'name' => 'user user',
            'email' => 'user@test.com',
            'password' => bcrypt('1234'),
        ]);

        $users = factory(User::class,1000)->create(
            [
                'password' => bcrypt('1234'),
            ]
        );
    }
}
