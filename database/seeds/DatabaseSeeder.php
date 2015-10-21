<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $faker=Faker\Factory::create();
        App\category::create(['title'=>'Public']);
        App\category::create(['title'=>'Private']);
        App\category::create(['title'=>'Family']);



        // $this->call(UserTableSeeder::class);
        foreach(range(1,100) as $index) {
            App\Post::create([
                'title'=>$faker->realText(30,2),
                'content'=>$faker->realText(30,2),
                'category_id'=>App\category::all()->random()->id

                ]);
        }
        Model::reguard();
    }
}
