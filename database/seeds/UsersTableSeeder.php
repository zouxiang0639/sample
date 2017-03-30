<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();

        User::insert($users->toArray());

        $user = User::find(1);
        $user->name = 'Aufree';
        $user->email = '542506511@qq.com';
        $user->password = bcrypt('admin');
        $user->save();
    }
}
