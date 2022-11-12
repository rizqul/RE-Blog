<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Risqull',
            'username' => 'risqull',
            'email' => 'kikiqullah@gmail.com',
            'password' => bcrypt('risqullah28')
        ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);

        Category::create([
            'name' => 'Device',
            'slug' => 'device',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'First title',
        //     'slug' => 'first-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et earum, delectus illo unde',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reiciendis ab! Non odio laudantium facere id, delectus minus error veritatis possimus ipsum, rerum doloremque labore corporis reiciendis modi nulla autem, expedita itaque quam tempore quo culpa dolores minima accusantium nisi? Quo quia doloribus a soluta consequuntur similique minus aperiam dolore molestiae, ipsa aliquid eos earum error, laborum deleniti quas aut est totam. Ducimus est explicabo, nobis soluta obcaecati aspernatur id dignissimos, blanditiis natus rerum optio. Incidunt, enim aspernatur aliquam maiores laborum ipsum deleniti exercitationem quia quae, saepe, dolores dolore. Ipsam error, dolorum eveniet quasi delectus vitae quidem veritatis maxime facere?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Second title',
        //     'slug' => 'second-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et earum, delectus illo unde',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reiciendis ab! Non odio laudantium facere id, delectus minus error veritatis possimus ipsum, rerum doloremque labore corporis reiciendis modi nulla autem, expedita itaque quam tempore quo culpa dolores minima accusantium nisi? Quo quia doloribus a soluta consequuntur similique minus aperiam dolore molestiae, ipsa aliquid eos earum error, laborum deleniti quas aut est totam. Ducimus est explicabo, nobis soluta obcaecati aspernatur id dignissimos, blanditiis natus rerum optio. Incidunt, enim aspernatur aliquam maiores laborum ipsum deleniti exercitationem quia quae, saepe, dolores dolore. Ipsam error, dolorum eveniet quasi delectus vitae quidem veritatis maxime facere?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Third title',
        //     'slug' => 'third-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et earum, delectus illo unde',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reiciendis ab! Non odio laudantium facere id, delectus minus error veritatis possimus ipsum, rerum doloremque labore corporis reiciendis modi nulla autem, expedita itaque quam tempore quo culpa dolores minima accusantium nisi? Quo quia doloribus a soluta consequuntur similique minus aperiam dolore molestiae, ipsa aliquid eos earum error, laborum deleniti quas aut est totam. Ducimus est explicabo, nobis soluta obcaecati aspernatur id dignissimos, blanditiis natus rerum optio. Incidunt, enim aspernatur aliquam maiores laborum ipsum deleniti exercitationem quia quae, saepe, dolores dolore. Ipsam error, dolorum eveniet quasi delectus vitae quidem veritatis maxime facere?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Fourth title',
        //     'slug' => 'fourth-title',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et earum, delectus illo unde',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, reiciendis ab! Non odio laudantium facere id, delectus minus error veritatis possimus ipsum, rerum doloremque labore corporis reiciendis modi nulla autem, expedita itaque quam tempore quo culpa dolores minima accusantium nisi? Quo quia doloribus a soluta consequuntur similique minus aperiam dolore molestiae, ipsa aliquid eos earum error, laborum deleniti quas aut est totam. Ducimus est explicabo, nobis soluta obcaecati aspernatur id dignissimos, blanditiis natus rerum optio. Incidunt, enim aspernatur aliquam maiores laborum ipsum deleniti exercitationem quia quae, saepe, dolores dolore. Ipsam error, dolorum eveniet quasi delectus vitae quidem veritatis maxime facere?</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
