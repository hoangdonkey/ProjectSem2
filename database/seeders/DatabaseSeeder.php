<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('admin')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
            ],
            [
                'name' => 'Ha Tien Dung',
                'email' => 'htdung0805@gmail.com',
                'password' => Hash::make('hatiendung92'),
            ],
        ]);

        DB::table('users')->insert([
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user'),
                'mobile' => '0123456789',
            ],
            [
                'name' => 'Ha Tien Dung',
                'email' => 'htdung0805@gmail.com',
                'password' => Hash::make('hatiendung92'),
                'mobile' => '0975181923',
            ]
        ]);

        DB::table('causes')->insert([
            [
                'cause_title' => "Cause title 1",
                'category' => 'Hunger',
                'description' => 'Though we tend to take good things in life for granted, but not everyone in the world has been blessed with the necessary means to lead a dignified life.',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 2",
                'category' => 'Culture',
                'description' => 'The world has made swift economic progress over the past few decades, but even today an unimaginable number of people in the world struggle to live a basic life.',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 3",
                'category' => 'Rights',
                'description' => 'A lot of children and people are deprived of certain must-haves like education, healthcare, shelter, safety, etc.',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 4",
                'category' => 'Rights',
                'description' => 'If donating a little portion of your total income can help bring about a changein the life of even a single marginalised child, it’s totally worth it. ',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 5",
                'category' => 'Culture',
                'description' => 'The inner satisfaction you get from doing something for others cannot be explained in words.',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 6",
                'category' => 'Hunger',
                'description' => 'Giving and helping those who are not as privileged as you will definitely make you feel that despite having a capped income, you’re still capable enough to make a big difference in the lives of other people. ',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 7",
                'category' => 'Rights',
                'description' => 'This will also gratify you to the core and make you appreciate everything that life has given you. You don’t have to be a millionaire to take out a part of your income and donate for a noble cause. ',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 8",
                'category' => 'Hunger',
                'description' => 'Try it and see for yourself, donating will leave you feeling happier and richer, apart from brining an unparalleled sense of satisfaction.',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
        ]);

        DB::table('donation')->insert([
            [
                'user_id' => 1,
                'cause_id' => 1,
                'dnt_amount' => 1000
            ],
            [
                'user_id' => 2,
                'cause_id' => 1,
                'dnt_amount' => 2000
            ],
        ]);
    }
}
