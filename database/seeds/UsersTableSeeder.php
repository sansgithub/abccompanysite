<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Sanjeev';
        $user->email = 'sanjeevkdk32@gmail.com';
        $user->password = bcrypt('sanjeev_kdk32@admin');
        $user->save();
    }
}
