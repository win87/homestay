<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Grade;
use App\Room;
use App\Host_info;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
        'email' => 'host@qq.com',
        'name' => 'Host',
        'user_type' => 1,
        'password' => Hash::make('123123')
        ]);

        
        User::create([
        'email' => 'student@qq.com',
        'name' => 'Student',
        'user_type' => 2,
        'password' => Hash::make('123123')
        ]);

        User::create([
        'email' => 'host3@qq.com',
        'name' => 'Host3',
        'user_type' => 1,
        'password' => Hash::make('123123')
        ]);

        User::create([
        'email' => 'admin@qq.com',
        'name' => 'Admin',
        'password' => Hash::make('123123'),
        'is_admin' => 1
        ]);

        Grade::create([
            'user_id' => '1',
            'math'    => 99,
            'english'    => 80,
            'c'    => 96,
            'sport'    => 95,
            'think'    => 99,
            'soft'    => 98,
        ]);

        Grade::create([
            'user_id' => '2',
            'math'    => 59,
            'english'    => 59,
            'c'    => 59,
            'sport'    => 59,
            'think'    => 59,
            'soft'    => 59,
            ]);

        Grade::create([
            'user_id' => '3',
            'math'    => 59,
            'english'    => 59,
            'c'    => 59,
            'sport'    => 59,
            'think'    => 59,
            'soft'    => 59,
            ]);


        Room::create([
            'user_id' => '1',  // belong to who
            'title' => 'First House',
            'room_type' => 'house',
            'house_type' => 'house',
            'intro' => 'New house that located near by UCB',
        ]);

        Room::create([
            'user_id' => '1',  // belong to who
            'title' => 'Second House',
            'room_type' => 'Apt',
            'house_type' => 'condo',
            'intro' => 'Second nice house',
        ]);

         Host_info::create([
            'user_id' => '1',  // belong to who
            'fName' => 'Wei',
            'lName' => 'Zeng',
            'age' => '32',
            'gender' => '1',
            'ethnicity' => 'Asian',
            'occupation' => 'Programmer',
            'phone' => '5102604157',
            'mobile' => '4157676188',
        ]);



    }

}
