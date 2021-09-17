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
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eaque nisi facilis incidunt quod numquam distinctio, sapiente exercitationem nulla porro dolorem voluptatem, culpa fuga magnam, sequi dignissimos consequatur sed quaerat!',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 2",
                'category' => 'Culture',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eaque nisi facilis incidunt quod numquam distinctio, sapiente exercitationem nulla porro dolorem voluptatem, culpa fuga magnam, sequi dignissimos consequatur sed quaerat!',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 3",
                'category' => 'Rights',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eaque nisi facilis incidunt quod numquam distinctio, sapiente exercitationem nulla porro dolorem voluptatem, culpa fuga magnam, sequi dignissimos consequatur sed quaerat!',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 4",
                'category' => 'Rights',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eaque nisi facilis incidunt quod numquam distinctio, sapiente exercitationem nulla porro dolorem voluptatem, culpa fuga magnam, sequi dignissimos consequatur sed quaerat!',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 5",
                'category' => 'Culture',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eaque nisi facilis incidunt quod numquam distinctio, sapiente exercitationem nulla porro dolorem voluptatem, culpa fuga magnam, sequi dignissimos consequatur sed quaerat!',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 6",
                'category' => 'Hunger',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eaque nisi facilis incidunt quod numquam distinctio, sapiente exercitationem nulla porro dolorem voluptatem, culpa fuga magnam, sequi dignissimos consequatur sed quaerat!',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 7",
                'category' => 'Rights',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eaque nisi facilis incidunt quod numquam distinctio, sapiente exercitationem nulla porro dolorem voluptatem, culpa fuga magnam, sequi dignissimos consequatur sed quaerat!',
                'goal' => 10000,
                'total_amount' => 5000,
                'dnt_amount' => 100,
                'status' => 1,
            ],
            [
                'cause_title' => "Cause title 8",
                'category' => 'Hunger',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eaque nisi facilis incidunt quod numquam distinctio, sapiente exercitationem nulla porro dolorem voluptatem, culpa fuga magnam, sequi dignissimos consequatur sed quaerat!',
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
