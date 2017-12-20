<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Page;

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
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123123');
        $user->save();

        $page_title = new Page();
        $page_title->title = 'home';
        $page_title->heading = '';
        $page_title->description = '';
        $page_title->image_url = '';
        $page_title->save();

        $page_title = new Page();
        $page_title->title = 'mission';
        $page_title->heading = '';
        $page_title->description = '';
        $page_title->image_url = '';
        $page_title->save();

        $page_title = new Page();
        $page_title->title = 'vision';
        $page_title->heading = '';
        $page_title->description = '';
        $page_title->image_url = '';
        $page_title->save();
    }
}
