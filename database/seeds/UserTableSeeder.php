<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        \App\User::create([
            'nickname'      =>      'Chi Rilo',
            'avatar'        =>      'assets/images/Chi.jpg',
            'email'         =>      'chithewebdeveloper@gmail.com',
            'phone'         =>      '09010000001',
            'password'      =>      bcrypt('123123'),
        ]);
        \App\User::create([
            'nickname'      =>      'Kim Co',
            'avatar'        =>      'assets/images/Kim.jpg',
            'email'         =>      'kim@ayoo.club',
            'phone'         =>      '00000000002',
            'password'      =>      bcrypt('123123'),
        ]);

        \App\User::create([
            'nickname'      =>      'Jeth Ro',
            'avatar'        =>      'assets/images/Jethro.jpg',
            'email'         =>      'jethro@ayoo.club',
            'phone'         =>      '00000000003',
            'password'      =>      bcrypt('123123'),
        ]);

        \App\User::create([
            'nickname'      =>      'Jane Askin',
            'avatar'        =>      'assets/images/Jane.jpg',
            'email'         =>      'jane@ayoo.club',
            'phone'         =>      '00000000004',
            'password'      =>      bcrypt('123123'),
        ]);

        \App\User::create([
            'nickname'      =>      'Neil Bonoti',
            'avatar'        =>      'assets/images/Neil.jpg',
            'email'         =>      'neil@ayoo.club',
            'phone'         =>      '00000000005',
            'password'      =>      bcrypt('123123'),
        ]);

        \App\User::create([
            'nickname'      =>      'App Tester',
            'avatar'        =>      'assets/images/userAvatar-default.png',
            'email'         =>      'test@ayoo.club',
            'phone'         =>      '00000000006',
            'password'      =>      Hash::make('123123'),
        ]);        

        foreach (range(1, 3) as $index) {

            if (env('FAKER_IMAGE_SAVE')) {
                $imgUrl = $faker->image(storage_path('app/uploads/avatars'), 300, 300, 'people');
                $imgUrl = strstr($imgUrl, 'uploads/avatars');
            } else {
                $imgUrl = $faker->imageUrl(300, 300, 'people');
            }

            $data[] = [
                'nickname'      =>  $faker->name(),
                'avatar'        =>  $imgUrl,
                'email'         =>  $faker->email(),
                'phone'         =>  $faker->phoneNumber(),
                'password'      =>  bcrypt('ayoofakeuser'),

                'created_at'    =>  $faker->dateTimeThisMonth(),
                'updated_at'    =>  $faker->dateTimeThisMonth(),
            ];
        }
        \App\User::insert($data);
    }
}
