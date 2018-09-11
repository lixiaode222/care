<?php

use Illuminate\Database\Seeder;
use \App\User;

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
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'lixiaode';
        $user->email = '1803118517@qq.com';
        $user->password = bcrypt('pkpk123123');
        $user->is_admin = true;
        $user->activated = true;
        $user->save();
    }
}
